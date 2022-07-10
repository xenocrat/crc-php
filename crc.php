<?php
    namespace xenocrat;

    class crc {
        const CRC_VERSION_MAJOR     = 0;
        const CRC_VERSION_MINOR     = 1;

        const CRC_CHECK_DATA                 = "123456789";

        const CRC8_CDMA2000_CHECK            = 0xda;
        const CRC16_USB_CHECK                = 0xb4c8;
        const CRC16_XMODEM_CHECK             = 0x31c3;
        const CRC24_OPENPGP_CHECK            = 0x21cf02;
        const CRC24_FLEXRAY_A_CHECK          = 0x7979bd;
        const CRC24_FLEXRAY_B_CHECK          = 0x1f23b8;
        const CRC32_AIXM_CHECK               = 0x3010bf7f;

        /* CRC-8/CDMA2000 */
        public static function crc8_cdma2000($str): int {
            return self::crc8($str, 0x9b, 0xff, 0x00, false, false);
        }

        /* CRC-16/USB */
        public static function crc16_usb($str): int {
            return self::crc16($str, 0x8005, 0xffff, 0xffff, true, true);
        }

        /* CRC-16/XMODEM */
        public static function crc16_xmodem($str): int {
            return self::crc16($str, 0x1021, 0x0000, 0x0000, false, false);
        }

        /* CRC-24/OPENPGP */
        public static function crc24_openpgp($str): int {
            return self::crc24($str, 0x864cfb, 0xb704ce, 0x000000, false, false);
        }

        /* CRC-24/FLEXRAY-A */
        public static function crc24_flexray_a($str): int {
            return self::crc24($str, 0x5d6dcb, 0xfedcba, 0x000000, false, false);
        }

        /* CRC-24/FLEXRAY-B */
        public static function crc24_flexray_b($str): int {
            return self::crc24($str, 0x5d6dcb, 0xabcdef, 0x000000, false, false);
        }

        /* CRC-32/AIXM */
        public static function crc32_aixm($str): int {
            return self::crc32($str, 0x814141ab, 0x00000000, 0x00000000, false, false);
        }

        public static function crc8($str, $polynomial, $ini, $xor, $ref_in, $ref_out): int {
            $crc = $ini;

            for ($i = 0; $i < strlen($str); $i++) {
                $byte = ord($str[$i]);

                if ($ref_in)
                    self::reflect_bits($byte, 8);

                $crc ^= $byte;

                for ($j = 0; $j < 8; $j++) {
                    if ($crc & 0x80)
                        $crc = (($crc << 1) & 0xff) ^ $polynomial;
                    else
                        $crc = ($crc << 1) & 0xff;
                }
            }

            $result = ($crc ^ $xor) & 0xff;

            if ($ref_out)
                self::reflect_bits($result, 8);

            return $result;
        }

        public static function crc16($str, $polynomial, $ini, $xor, $ref_in, $ref_out): int {
            $crc = $ini;

            for ($i = 0; $i < strlen($str); $i++) {
                $byte = ord($str[$i]);

                if ($ref_in)
                    self::reflect_bits($byte, 8);

                $crc ^= $byte << 8;

                for ($j = 0; $j < 8; $j++) {
                    if ($crc & 0x8000)
                        $crc = (($crc << 1) & 0xffff) ^ $polynomial;
                    else
                        $crc = ($crc << 1) & 0xffff;
                }
            }

            $result = ($crc ^ $xor) & 0xffff;

            if ($ref_out)
                self::reflect_bits($result, 16);

            return $result;
        }

        public static function crc24($str, $polynomial, $ini, $xor, $ref_in, $ref_out): int {
            $crc = $ini;

            for ($i = 0; $i < strlen($str); $i++) {
                $byte = ord($str[$i]);

                if ($ref_in)
                    self::reflect_bits($byte, 8);

                $crc ^= $byte << 16;

                for ($j = 0; $j < 8; $j++) {
                    $crc = (($crc << 1) & 0xffffffff);

                    if ($crc & 0x1000000)
                        $crc ^= $polynomial;
                }
            }

            $result = ($crc ^ $xor) & 0xffffff;

            if ($ref_out)
                self::reflect_bits($result, 24);

            return $result;
        }

        public static function crc32($str, $polynomial, $ini, $xor, $ref_in, $ref_out): int {
            $crc = $ini;

            for ($i = 0; $i < strlen($str); $i++) {
                $byte = ord($str[$i]);

                if ($ref_in)
                    self::reflect_bits($byte, 8);

                $crc ^= $byte << 24;

                for ($j = 0; $j < 8; $j++) {
                    if ($crc & 0x80000000)
                        $crc = (($crc << 1) & 0xffffffff) ^ $polynomial;
                    else
                        $crc = ($crc << 1) & 0xffffffff;
                }
            }

            $result = ($crc ^ $xor) & 0xffffffff;

            if ($ref_out)
                self::reflect_bits($result, 32);

            return $result;
        }

        public static function test() {
            $reflect = new \ReflectionClass(get_called_class());
            $methods = $reflect->getMethods(\ReflectionMethod::IS_PUBLIC);

            foreach ($methods as $method) {
                $name = $method->getShortName();

                if (!preg_match("/^crc[0-9]{1,2}_.+/", $name))
                    continue;

                $const = constant('self::'.strtoupper($name).'_CHECK');
                $value = self::$name(self::CRC_CHECK_DATA);
                $check = defined($const) ? constant($const) : false ;

                if ($value !== $const)
                    throw new \Exception("CRC check value mismatch: ".$name."()");
            }
        }

        private static function reflect_bits(&$num, $bits): void {
            $bin = decbin($num);
            $str = str_pad($bin, $bits, "0", STR_PAD_LEFT);
            $rev = strrev($str);
            $num = bindec($rev);
        }
    }

<?php
    namespace xenocrat;

    class crc {
        const CRC_VERSION_MAJOR     = 0;
        const CRC_VERSION_MINOR     = 1;

        const CRC_CHECK_DATA        = "123456789";

        const CRC8_AUTOSAR_CHECK    = 0xdf;
        const CRC8_BLUETOOTH_CHECK  = 0x26;
        const CRC8_CDMA2000_CHECK   = 0xda;
        const CRC8_DARC_CHECK       = 0x15;
        const CRC8_DVB_S2_CHECK     = 0xbc;
        const CRC8_GSM_A_CHECK      = 0x37;
        const CRC8_GSM_B_CHECK      = 0x94;
        const CRC8_HITAG_CHECK      = 0xb4;
        const CRC8_I_432_1_CHECK    = 0xa1;
        const CRC8_I_CODE_CHECK     = 0x7e;
        const CRC8_LTE_CHECK        = 0xea;
        const CRC8_MAXIM_DOW_CHECK  = 0xa1;
        const CRC8_MIFARE_MAD_CHECK = 0x99;
        const CRC8_NRSC_5_CHECK     = 0xf7;
        const CRC8_OPENSAFETY_CHECK = 0x3e;
        const CRC8_ROHC_CHECK       = 0xd0;
        const CRC8_SAE_J1850_CHECK  = 0x4b;
        const CRC8_SMBUS_CHECK      = 0xf4;
        const CRC8_TECH_3250_CHECK  = 0x97;
        const CRC8_WCDMA_CHECK      = 0x25;

        const CRC16_USB_CHECK       = 0xb4c8;
        const CRC16_XMODEM_CHECK    = 0x31c3;
        const CRC24_OPENPGP_CHECK   = 0x21cf02;
        const CRC24_FLEXRAY_A_CHECK = 0x7979bd;
        const CRC24_FLEXRAY_B_CHECK = 0x1f23b8;
        const CRC32_AIXM_CHECK      = 0x3010bf7f;

        /* CRC-8/AUTOSAR */
        public static function crc8_autosar($str): int {
            return self::crc8($str, 0x2f, 0xff, 0xff, false, false);
        }

        /* CRC-8/BLUETOOTH */
        public static function crc8_bluetooth($str): int {
            return self::crc8($str, 0xa7, 0x00, 0x00, true, true);
        }

        /* CRC-8/CDMA2000 */
        public static function crc8_cdma2000($str): int {
            return self::crc8($str, 0x9b, 0xff, 0x00, false, false);
        }

        /* CRC-8/DARC */
        public static function crc8_darc($str): int {
            return self::crc8($str, 0x39, 0x00, 0x00, true, true);
        }

        /* CRC-8/DVB-S2 */
        public static function crc8_dvb_s2($str): int {
            return self::crc8($str, 0xd5, 0x00, 0x00, false, false);
        }

        /* CRC-8/GSM-A */
        public static function crc8_gsm_a($str): int {
            return self::crc8($str, 0x1d, 0x00, 0x00, false, false);
        }

        /* CRC-8/GSM-B */
        public static function crc8_gsm_b($str): int {
            return self::crc8($str, 0x49, 0x00, 0xff, false, false);
        }

        /* CRC-8/HITAG */
        public static function crc8_hitag($str): int {
            return self::crc8($str, 0x1d, 0xff, 0x00, false, false);
        }

        /* CRC-8/I-432-1 */
        public static function crc8_i_432_1($str): int {
            return self::crc8($str, 0x07, 0x00, 0x55, false, false);
        }

        /* CRC-8/I-CODE */
        public static function crc8_i_code($str): int {
            return self::crc8($str, 0x1d, 0xfd, 0x00, false, false);
        }

        /* CRC-8/LTE */
        public static function crc8_lte($str): int {
            return self::crc8($str, 0x9b, 0x00, 0x00, false, false);
        }

        /* CRC-8/MAXIM-DOW */
        public static function crc8_maxim_dow($str): int {
            return self::crc8($str, 0x31, 0x00, 0x00, true, true);
        }

        /* CRC-8/MIFARE-MAD */
        public static function crc8_mifare_mad($str): int {
            return self::crc8($str, 0x1d, 0xc7, 0x00, false, false);
        }

        /* CRC-8/NRSC-5 */
        public static function crc8_nrsc_5($str): int {
            return self::crc8($str, 0x31, 0xff, 0x00, false, false);
        }

        /* CRC-8/OPENSAFETY */
        public static function crc8_opensafety($str): int {
            return self::crc8($str, 0x2f, 0x00, 0x00, false, false);
        }

        /* CRC-8/ROHC */
        public static function crc8_rohc($str): int {
            return self::crc8($str, 0x07, 0xff, 0x00, true, true);
        }

        /* CRC-8/SAE-J1850 */
        public static function crc8_sae_j1850($str): int {
            return self::crc8($str, 0x1d, 0xff, 0xff, false, false);
        }

        /* CRC-8/SMBUS */
        public static function crc8_smbus($str): int {
            return self::crc8($str, 0x07, 0x00, 0x00, false, false);
        }

        /* CRC-8/TECH-3250 */
        public static function crc8_tech_3250($str): int {
            return self::crc8($str, 0x1d, 0xff, 0x00, true, true);
        }

        /* CRC-8/WCDMA */
        public static function crc8_wcdma($str): int {
            return self::crc8($str, 0x9b, 0x00, 0x00, true, true);
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

        private static function reflect_bits(&$num, $width): void {
            $bin = decbin($num);
            $str = str_pad($bin, $width, "0", STR_PAD_LEFT);
            $rev = strrev($str);
            $num = bindec($rev);
        }
    }

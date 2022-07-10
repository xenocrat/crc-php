## What is this?

CRC-PHP is a PHP class implementing CRC-8/16/24/32 algorithms.

## Requirements

* PHP 8.0+

## Usage

Calculate the CRC-16/XMODEM result for a string:

    $crc = \xenocrat\crc::crc16_xmodem("foobar");

Read data from disk and calculate the CRC-24/OPENPGP result:

    $file = file_get_contents("README.md");
    $crc = \xenocrat\crc::crc24_openpgp($file);

Test all implementations by comparing a calculated result to a check value:

    \xenocrat\crc::test();

## Implementations

* CRC-8/AUTOSAR: `crc8_autosar()`
* CRC-8/BLUETOOTH: `crc8_bluetooth()`
* CRC-8/CDMA2000: `crc8_cdma2000()`
* CRC-8/DARC: `crc8_darc()`
* CRC-8/DVB-S2: `crc8_dvb_s2()`
* CRC-8/GSM-A: `crc8_gsm_a()`
* CRC-8/GSM-B: `crc8_gsm_b()`
* CRC-8/HITAG: `crc8_hitag()`
* CRC-8/I-432-1: `crc8_i_432_1()`
* CRC-8/I-CODE: `crc8_i_code()`
* CRC-8/LTE: `crc8_lte()`
* CRC-8/MAXIM-DOW: `crc8_maxim_dow()`
* CRC-8/MIFARE-MAD: `crc8_mifare_mad()`
* CRC-8/NRSC-5: `crc8_nrsc_5()`
* CRC-8/OPENSAFETY: `crc8_opensafety()`
* CRC-8/ROHC: `crc8_rohc()`
* CRC-8/SAE-J1850: `crc8_sae_j1850()`
* CRC-8/SMBUS: `crc8_smbus()`
* CRC-8/TECH-3250: `crc8_tech_3250()`
* CRC-8/WCDMA: `crc8_wcdma()`
* CRC-16/USB: `crc16_usb()`
* CRC-16/XMODEM: `crc16_xmodem()`
* CRC-24/OPENPGP: `crc24_openpgp()`
* CRC-24/FLEXRAY-A: `crc24_flexray_a()`
* CRC-24/FLEXRAY-B: `crc24_flexray_b()`
* CRC-32/AIXM: `crc32_aixm()`

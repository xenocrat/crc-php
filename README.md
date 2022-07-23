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
* CRC-16/A: `crc16_a()`
* CRC-16/ARC: `crc16_arc()`
* CRC-16/CDMA2000: `crc16_cdma2000()`
* CRC-16/CMS: `crc16_cms()`
* CRC-16/DDS-110: `crc16_dds_110()`
* CRC-16/DECT-R: `crc16_dect_r()`
* CRC-16/DECT-X: `crc16_dect_x()`
* CRC-16/DNP: `crc16_dnp()`
* CRC-16/EN-13757: `crc16_en_13757()`
* CRC-16/GENIBUS: `crc16_genibus()`
* CRC-16/GSM: `crc16_gsm()`
* CRC-16/IBM-3740: `crc16_ibm_3740()`
* CRC-16/IBM-SDLC: `crc16_ibm_sdlc()`
* CRC-16/KERMIT: `crc16_kermit()`
* CRC-16/LJ1200: `crc16_lj1200()`
* CRC-16/M17: `crc16_m17()`
* CRC-16/MAXIM-DOW: `crc16_maxim_dow()`
* CRC-16/MCRF4XX: `crc16_mcrf4xx()`
* CRC-16/MODBUS: `crc16_modbus()`
* CRC-16/NRSC-5: `crc16_nrsc_5()`
* CRC-16/OPENSAFETY-A: `crc16_opensafety_a()`
* CRC-16/OPENSAFETY-B: `crc16_opensafety_b()`
* CRC-16/PROFIBUS: `crc16_profibus()`
* CRC-16/RIELLO: `crc16_riello()`
* CRC-16/SPI-FUJITSU: `crc16_spi_fujitsu()`
* CRC-16/T10-DIF: `crc16_t10_dif()`
* CRC-16/TELEDISK: `crc16_teledisk()`
* CRC-16/TMS37157: `crc16_tms37157()`
* CRC-16/UMTS: `crc16_umts()`
* CRC-16/USB: `crc16_usb()`
* CRC-16/XMODEM: `crc16_xmodem()`
* CRC-24/BLE: `crc24_ble()`
* CRC-24/FLEXRAY-A: `crc24_flexray_a()`
* CRC-24/FLEXRAY-B: `crc24_flexray_b()`
* CRC-24/INTERLAKEN: `crc24_interlaken()`
* CRC-24/LTE-A: `crc24_lte_a()`
* CRC-24/LTE-B: `crc24_lte_b()`
* CRC-24/OPENPGP: `crc24_openpgp()`
* CRC-24/OS-9: `crc24_os_9()`
* CRC-32/AIXM: `crc32_aixm()`

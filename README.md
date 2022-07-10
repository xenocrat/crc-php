## What is this?

CRC-PHP is a PHP class implementing CRC-8/16/24/32 algorithms.

## Requirements

* PHP 8.0+

## Usage

Calculate a CRC-16 result for a string using the CRC-16/XMODEM implementation:

    $crc = \xenocrat\crc::crc16_xmodem("foobar");

Read data from disk and calculate the CRC-24 result:

    $file = file_get_contents("README.md");
    $crc = \xenocrat\crc::crc24_openpgp($file);

Test all implementations by calculating a result and comparing to a check value:

    \xenocrat\crc::test();

## Implementations

* CRC-8/CDMA2000
* CRC-16/USB
* CRC-16/XMODEM
* CRC-24/OPENPGP
* CRC-24/FLEXRAY-A
* CRC-24/FLEXRAY-B
* CRC-32/AIXM

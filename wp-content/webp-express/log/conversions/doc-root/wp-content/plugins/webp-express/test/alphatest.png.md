WebP Express 0.18.2. Conversion triggered using bulk conversion, 2020-10-23 01:35:38

Converter set to: cwebp

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.22
- Server software: Apache/2.4.46 (Unix) OpenSSL/1.1.1g PHP/7.3.22

Cwebp converter ignited
Destination folder does not exist. Creating folder: [doc-root]/wp-content/webp-express/webp-images/plugins/webp-express/test

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/plugins/webp-express/test/alphatest.png
- destination: [doc-root]/wp-content/webp-express/webp-images/plugins/webp-express/test/alphatest.png.webp
- alpha-quality: 85
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- metadata: "all"
- method: 6
- near-lossless: 60
- quality: 85
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- auto-filter: false
- default-quality: 85
- max-quality: 85
- preset: "none"
- size-in-percentage: null (not set)
- skip: false
- rel-path-to-precompiled-binaries: *****
- try-cwebp: true
- try-discovering-cwebp: true
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: *Exec failed* (the cwebp binary was not found at path: cwebp)
Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/local/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Darwin)... We do.
Found 1 binaries: 
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14
Detecting versions of the cwebp binaries found
- Executing: /usr/local/bin/cwebp -version 2>&1. Result: version: *1.1.0*
- Executing: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14 -version 2>&1. Result: *Exec failed*. Permission denied (user: "d4all" does not have permission to execute that binary)
Binaries ordered by version number.
- /usr/local/bin/cwebp: (version: 1.1.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.1.0
Quality: 85. 
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice /usr/local/bin/cwebp -metadata all -q 85 -alpha_q '85' -m 6 -low_memory '[doc-root]/wp-content/plugins/webp-express/test/alphatest.png' -o '[doc-root]/wp-content/webp-express/webp-images/plugins/webp-express/test/alphatest.png.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/webp-express/webp-images/plugins/webp-express/test/alphatest.png.webp.lossy.webp'
File:      [doc-root]/wp-content/plugins/webp-express/test/alphatest.png
Dimension: 380 x 287 (with alpha)
Output:    10188 bytes Y-U-V-All-PSNR 55.39 50.43 50.20   52.99 dB
           (0.75 bpp)
block count:  intra4:         66  (15.28%)
              intra16:       366  (84.72%)
              skipped:       234  (54.17%)
bytes used:  header:            134  (1.3%)
             mode-partition:    522  (5.1%)
             transparency:     7822 (60.4 dB)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |      65 |      22 |       5 |      37 |     129  (1.3%)
 intra16-coeffs:  |     155 |       0 |      37 |      92 |     284  (2.8%)
  chroma coeffs:  |     661 |       9 |      76 |     498 |    1244  (12.2%)
    macroblocks:  |      42%|       1%|       4%|      53%|     432
      quantizer:  |      20 |      16 |      12 |       8 |
   filter level:  |       7 |      38 |       2 |       0 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |     881 |      31 |     118 |     627 |    1657  (16.3%)
Lossless-alpha compressed size: 7821 bytes
  * Header size: 361 bytes, image data size: 7460
  * Lossless features used: PREDICTION
  * Precision Bits: histogram=3 transform=3 cache=0
  * Palette size:   135

Success
Reduction: 62% (went from 26 kb to 10 kb)

Converting to lossless
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: *Exec failed* (the cwebp binary was not found at path: cwebp)
Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/local/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Darwin)... We do.
Found 1 binaries: 
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14
Detecting versions of the cwebp binaries found
- Executing: /usr/local/bin/cwebp -version 2>&1. Result: version: *1.1.0*
- Executing: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14 -version 2>&1. Result: *Exec failed*. Permission denied (user: "d4all" does not have permission to execute that binary)
Binaries ordered by version number.
- /usr/local/bin/cwebp: (version: 1.1.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.1.0
Trying to convert by executing the following command:
nice /usr/local/bin/cwebp -metadata all -q 85 -alpha_q '85' -near_lossless 60 -m 6 -low_memory '[doc-root]/wp-content/plugins/webp-express/test/alphatest.png' -o '[doc-root]/wp-content/webp-express/webp-images/plugins/webp-express/test/alphatest.png.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/webp-express/webp-images/plugins/webp-express/test/alphatest.png.webp.lossless.webp'
File:      [doc-root]/wp-content/plugins/webp-express/test/alphatest.png
Dimension: 380 x 287
Output:    13380 bytes (0.98 bpp)
Lossless-ARGB compressed size: 13380 bytes
  * Header size: 994 bytes, image data size: 12361
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM
  * Precision Bits: histogram=3 transform=3 cache=10

Success
Reduction: 50% (went from 26 kb to 13 kb)

Picking lossy

Converted image in 500 ms, reducing file size with 62% (went from 26 kb to 10 kb)

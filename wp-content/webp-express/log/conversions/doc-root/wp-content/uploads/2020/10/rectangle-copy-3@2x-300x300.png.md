WebP Express 0.18.2. Conversion triggered using bulk conversion, 2020-10-23 01:36:12

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.22
- Server software: Apache/2.4.46 (Unix) OpenSSL/1.1.1g PHP/7.3.22

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2020/10/rectangle-copy-3@2x-300x300.png
- destination: [doc-root]/wp-content/uploads/2020/10/rectangle-copy-3@2x-300x300.png.webp
- log-call-arguments: true
- converters: (array of 9 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- alpha-quality: 85
- encoding: "auto"
- metadata: "all"
- near-lossless: 60
- quality: 85
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2020/10/rectangle-copy-3@2x-300x300.png
- destination: [doc-root]/wp-content/uploads/2020/10/rectangle-copy-3@2x-300x300.png.webp
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
nice /usr/local/bin/cwebp -metadata all -q 85 -alpha_q '85' -m 6 -low_memory '[doc-root]/wp-content/uploads/2020/10/rectangle-copy-3@2x-300x300.png' -o '[doc-root]/wp-content/uploads/2020/10/rectangle-copy-3@2x-300x300.png.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/uploads/2020/10/rectangle-copy-3@2x-300x300.png.webp.lossy.webp'
File:      [doc-root]/wp-content/uploads/2020/10/rectangle-copy-3@2x-300x300.png
Dimension: 300 x 300 (with alpha)
Output:    18472 bytes Y-U-V-All-PSNR 42.72 44.11 43.97   43.12 dB
           (1.64 bpp)
block count:  intra4:        300  (83.10%)
              intra16:        61  (16.90%)
              skipped:        40  (11.08%)
bytes used:  header:            227  (1.2%)
             mode-partition:   1629  (8.8%)
             transparency:     2551 (99.0 dB)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   10318 |      86 |     128 |      45 |   10577  (57.3%)
 intra16-coeffs:  |      83 |       0 |      14 |       4 |     101  (0.5%)
  chroma coeffs:  |    3226 |      25 |      50 |      29 |    3330  (18.0%)
    macroblocks:  |      84%|       2%|       4%|       9%|     361
      quantizer:  |      15 |      11 |       8 |       8 |
   filter level:  |       4 |       2 |       2 |       0 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   13627 |     111 |     192 |      78 |   14008  (75.8%)
Lossless-alpha compressed size: 2550 bytes
  * Header size: 97 bytes, image data size: 2453
  * Precision Bits: histogram=3 transform=3 cache=0
  * Palette size:   105

Success
Reduction: 87% (went from 142 kb to 18 kb)

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
nice /usr/local/bin/cwebp -metadata all -q 85 -alpha_q '85' -near_lossless 60 -m 6 -low_memory '[doc-root]/wp-content/uploads/2020/10/rectangle-copy-3@2x-300x300.png' -o '[doc-root]/wp-content/uploads/2020/10/rectangle-copy-3@2x-300x300.png.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/uploads/2020/10/rectangle-copy-3@2x-300x300.png.webp.lossless.webp'
File:      [doc-root]/wp-content/uploads/2020/10/rectangle-copy-3@2x-300x300.png
Dimension: 300 x 300
Output:    64388 bytes (5.72 bpp)
Lossless-ARGB compressed size: 64388 bytes
  * Header size: 2642 bytes, image data size: 61721
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=3 transform=3 cache=10

Success
Reduction: 56% (went from 142 kb to 63 kb)

Picking lossy
cwebp succeeded :)

Converted image in 544 ms, reducing file size with 87% (went from 142 kb to 18 kb)

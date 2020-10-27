WebP Express 0.18.2. Conversion triggered using bulk conversion, 2020-10-23 01:36:28

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.22
- Server software: Apache/2.4.46 (Unix) OpenSSL/1.1.1g PHP/7.3.22

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2020/10/hero-tablet-1024x533.jpg
- destination: [doc-root]/wp-content/uploads/2020/10/hero-tablet-1024x533.jpg.webp
- log-call-arguments: true
- converters: (array of 9 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- encoding: "auto"
- metadata: "all"
- near-lossless: 60
- quality: 70
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2020/10/hero-tablet-1024x533.jpg
- destination: [doc-root]/wp-content/uploads/2020/10/hero-tablet-1024x533.jpg.webp
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- metadata: "all"
- method: 6
- near-lossless: 60
- quality: 70
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- alpha-quality: 85
- auto-filter: false
- default-quality: 75
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
Quality: 70. 
Consider setting quality to "auto" instead. It is generally a better idea
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice /usr/local/bin/cwebp -metadata all -q 70 -alpha_q '85' -m 6 -low_memory '[doc-root]/wp-content/uploads/2020/10/hero-tablet-1024x533.jpg' -o '[doc-root]/wp-content/uploads/2020/10/hero-tablet-1024x533.jpg.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/uploads/2020/10/hero-tablet-1024x533.jpg.webp.lossy.webp'
File:      [doc-root]/wp-content/uploads/2020/10/hero-tablet-1024x533.jpg
Dimension: 1024 x 533
Output:    10710 bytes Y-U-V-All-PSNR 45.65 45.49 43.86   45.27 dB
           (0.16 bpp)
block count:  intra4:        527  (24.22%)
              intra16:      1649  (75.78%)
              skipped:       625  (28.72%)
bytes used:  header:            152  (1.4%)
             mode-partition:   2891  (27.0%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    2838 |      31 |       9 |      13 |    2891  (27.0%)
 intra16-coeffs:  |      46 |      10 |       9 |     329 |     394  (3.7%)
  chroma coeffs:  |    3317 |     111 |      45 |     882 |    4355  (40.7%)
    macroblocks:  |      22%|       3%|       3%|      73%|    2176
      quantizer:  |      39 |      36 |      30 |      22 |
   filter level:  |      16 |       8 |       5 |       3 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    6201 |     152 |      63 |    1224 |    7640  (71.3%)

Success
Reduction: 67% (went from 32 kb to 10 kb)

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
nice /usr/local/bin/cwebp -metadata all -q 70 -alpha_q '85' -near_lossless 60 -m 6 -low_memory '[doc-root]/wp-content/uploads/2020/10/hero-tablet-1024x533.jpg' -o '[doc-root]/wp-content/uploads/2020/10/hero-tablet-1024x533.jpg.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/uploads/2020/10/hero-tablet-1024x533.jpg.webp.lossless.webp'
File:      [doc-root]/wp-content/uploads/2020/10/hero-tablet-1024x533.jpg
Dimension: 1024 x 533
Output:    107346 bytes (1.57 bpp)
Lossless-ARGB compressed size: 107346 bytes
  * Header size: 3507 bytes, image data size: 103813
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=4 transform=4 cache=10

Success
Reduction: -232% (went from 32 kb to 105 kb)

Picking lossy
cwebp succeeded :)

Converted image in 1005 ms, reducing file size with 67% (went from 32 kb to 10 kb)

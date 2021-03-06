WebP Express 0.18.2. Conversion triggered using bulk conversion, 2020-10-23 01:36:08

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.22
- Server software: Apache/2.4.46 (Unix) OpenSSL/1.1.1g PHP/7.3.22

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2020/10/hero-landscape-1536x750.jpg
- destination: [doc-root]/wp-content/uploads/2020/10/hero-landscape-1536x750.jpg.webp
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
- source: [doc-root]/wp-content/uploads/2020/10/hero-landscape-1536x750.jpg
- destination: [doc-root]/wp-content/uploads/2020/10/hero-landscape-1536x750.jpg.webp
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
nice /usr/local/bin/cwebp -metadata all -q 70 -alpha_q '85' -m 6 -low_memory '[doc-root]/wp-content/uploads/2020/10/hero-landscape-1536x750.jpg' -o '[doc-root]/wp-content/uploads/2020/10/hero-landscape-1536x750.jpg.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/uploads/2020/10/hero-landscape-1536x750.jpg.webp.lossy.webp'
File:      [doc-root]/wp-content/uploads/2020/10/hero-landscape-1536x750.jpg
Dimension: 1536 x 750
Output:    18836 bytes Y-U-V-All-PSNR 46.24 46.64 45.00   46.07 dB
           (0.13 bpp)
block count:  intra4:        870  (19.28%)
              intra16:      3642  (80.72%)
              skipped:      1870  (41.45%)
bytes used:  header:            170  (0.9%)
             mode-partition:   5419  (28.8%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    5205 |      56 |      18 |      23 |    5302  (28.1%)
 intra16-coeffs:  |      54 |      34 |      22 |     608 |     718  (3.8%)
  chroma coeffs:  |    5441 |     253 |      97 |    1407 |    7198  (38.2%)
    macroblocks:  |      18%|       2%|       2%|      78%|    4512
      quantizer:  |      39 |      38 |      31 |      23 |
   filter level:  |      16 |      16 |       5 |       3 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   10700 |     343 |     137 |    2038 |   13218  (70.2%)

Success
Reduction: 67% (went from 55 kb to 18 kb)

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
nice /usr/local/bin/cwebp -metadata all -q 70 -alpha_q '85' -near_lossless 60 -m 6 -low_memory '[doc-root]/wp-content/uploads/2020/10/hero-landscape-1536x750.jpg' -o '[doc-root]/wp-content/uploads/2020/10/hero-landscape-1536x750.jpg.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/uploads/2020/10/hero-landscape-1536x750.jpg.webp.lossless.webp'
File:      [doc-root]/wp-content/uploads/2020/10/hero-landscape-1536x750.jpg
Dimension: 1536 x 750
Output:    181380 bytes (1.26 bpp)
Lossless-ARGB compressed size: 181380 bytes
  * Header size: 4612 bytes, image data size: 176743
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=5 transform=4 cache=10

Success
Reduction: -222% (went from 55 kb to 177 kb)

Picking lossy
cwebp succeeded :)

Converted image in 1660 ms, reducing file size with 67% (went from 55 kb to 18 kb)

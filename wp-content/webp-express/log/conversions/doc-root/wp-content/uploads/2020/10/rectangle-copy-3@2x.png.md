WebP Express 0.18.2. Conversion triggered using bulk conversion, 2020-10-23 01:36:36

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.22
- Server software: Apache/2.4.46 (Unix) OpenSSL/1.1.1g PHP/7.3.22

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/2020/10/rectangle-copy-3@2x.png
- destination: [doc-root]/wp-content/uploads/2020/10/rectangle-copy-3@2x.png.webp
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
- source: [doc-root]/wp-content/uploads/2020/10/rectangle-copy-3@2x.png
- destination: [doc-root]/wp-content/uploads/2020/10/rectangle-copy-3@2x.png.webp
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
nice /usr/local/bin/cwebp -metadata all -q 85 -alpha_q '85' -m 6 -low_memory '[doc-root]/wp-content/uploads/2020/10/rectangle-copy-3@2x.png' -o '[doc-root]/wp-content/uploads/2020/10/rectangle-copy-3@2x.png.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/uploads/2020/10/rectangle-copy-3@2x.png.webp.lossy.webp'
File:      [doc-root]/wp-content/uploads/2020/10/rectangle-copy-3@2x.png
Dimension: 360 x 360 (with alpha)
Output:    24294 bytes Y-U-V-All-PSNR 42.11 43.87 43.77   42.60 dB
           (1.50 bpp)
block count:  intra4:        422  (79.77%)
              intra16:       107  (20.23%)
              skipped:        83  (15.69%)
bytes used:  header:            259  (1.1%)
             mode-partition:   2222  (9.1%)
             transparency:     2382 (77.1 dB)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   14441 |     189 |     188 |      99 |   14917  (61.4%)
 intra16-coeffs:  |     145 |       0 |       9 |      24 |     178  (0.7%)
  chroma coeffs:  |    4102 |      60 |      72 |      49 |    4283  (17.6%)
    macroblocks:  |      81%|       3%|       4%|      13%|     529
      quantizer:  |      16 |      11 |       8 |       8 |
   filter level:  |      11 |       2 |       2 |       0 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   18688 |     249 |     269 |     172 |   19378  (79.8%)
Lossless-alpha compressed size: 2381 bytes
  * Header size: 89 bytes, image data size: 2292
  * Precision Bits: histogram=3 transform=3 cache=0
  * Palette size:   101

Success
Reduction: 89% (went from 214 kb to 24 kb)

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
nice /usr/local/bin/cwebp -metadata all -q 85 -alpha_q '85' -near_lossless 60 -m 6 -low_memory '[doc-root]/wp-content/uploads/2020/10/rectangle-copy-3@2x.png' -o '[doc-root]/wp-content/uploads/2020/10/rectangle-copy-3@2x.png.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/uploads/2020/10/rectangle-copy-3@2x.png.webp.lossless.webp'
File:      [doc-root]/wp-content/uploads/2020/10/rectangle-copy-3@2x.png
Dimension: 360 x 360
Output:    86022 bytes (5.31 bpp)
Lossless-ARGB compressed size: 86022 bytes
  * Header size: 3063 bytes, image data size: 82933
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=3 transform=3 cache=10

Success
Reduction: 61% (went from 214 kb to 84 kb)

Picking lossy
cwebp succeeded :)

Converted image in 669 ms, reducing file size with 89% (went from 214 kb to 24 kb)

WebP Express 0.17.3. Conversion triggered using bulk conversion, 2020-04-13 23:33:24

*WebP Convert 2.3.0*  ignited.
- PHP version: 7.2.29
- Server software: LiteSpeed

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/thegem-logos/logo_c88e3c364cb16c64e85cb1a8ddce90ee_2x.png
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/thegem-logos/logo_c88e3c364cb16c64e85cb1a8ddce90ee_2x.png.webp
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
- metadata: "none"
- near-lossless: 60
- quality: 85
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/wp-content/uploads/thegem-logos/logo_c88e3c364cb16c64e85cb1a8ddce90ee_2x.png
- destination: [doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/thegem-logos/logo_c88e3c364cb16c64e85cb1a8ddce90ee_2x.png.webp
- alpha-quality: 85
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- metadata: "none"
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
- Executing: cwebp -version. Result: version: *0.3.0*
We could get the version, so yes, a plain cwebp call works
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 2 binaries: 
- /bin/cwebp
- /usr/bin/cwebp
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Linux)... We do. We in fact have 3
Found 3 binaries: 
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64
Detecting versions of the cwebp binaries found
- Executing: cwebp -version. Result: version: *0.3.0*
- Executing: /bin/cwebp -version. Result: version: *0.3.0*
- Executing: /usr/bin/cwebp -version. Result: version: *0.3.0*
- Executing: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64 -version. Result: *Exec failed*. Permission denied (user: "u761618479" does not have permission to execute that binary)
- Executing: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static -version. Result: *Exec failed*. Permission denied (user: "u761618479" does not have permission to execute that binary)
- Executing: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64 -version. Result: *Exec failed*. Permission denied (user: "u761618479" does not have permission to execute that binary)
Binaries ordered by version number.
- cwebp: (version: 0.3.0)
- /bin/cwebp: (version: 0.3.0)
- /usr/bin/cwebp: (version: 0.3.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 0.3.0
Quality: 85. 
*The near-lossless option is not supported on this (rather old) version of cwebp- skipping it.* 
Trying to convert by executing the following command:
nice cwebp -metadata none -q 85 -alpha_q '85' -m 6 -low_memory '[doc-root]/wp-content/uploads/thegem-logos/logo_c88e3c364cb16c64e85cb1a8ddce90ee_2x.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/thegem-logos/logo_c88e3c364cb16c64e85cb1a8ddce90ee_2x.png.webp.lossy.webp' 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/thegem-logos/logo_c88e3c364cb16c64e85cb1a8ddce90ee_2x.png.webp.lossy.webp'
File:      [doc-root]/wp-content/uploads/thegem-logos/logo_c88e3c364cb16c64e85cb1a8ddce90ee_2x.png
Dimension: 259 x 78
Output:    3816 bytes Y-U-V-All-PSNR 44.16 42.23 41.74   43.30 dB
block count:  intra4: 62
              intra16: 23  (-> 27.06%)
              skipped block: 16 (18.82%)
bytes used:  header:            222  (5.8%)
             mode-partition:    312  (8.2%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |     487 |    1339 |     389 |       0 |    2215  (58.0%)
 intra16-coeffs:  |       0 |       0 |       8 |       1 |       9  (0.2%)
  chroma coeffs:  |     275 |     630 |     109 |      15 |    1029  (27.0%)
    macroblocks:  |      11%|      43%|      24%|      20%|      85
      quantizer:  |      19 |      16 |      13 |       8 |
   filter level:  |       8 |       5 |       3 |       0 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |     762 |    1969 |     506 |      16 |    3253  (85.2%)

Success
Reduction: 54% (went from 8235 bytes to 3816 bytes)

Converting to lossless
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version. Result: version: *0.3.0*
We could get the version, so yes, a plain cwebp call works
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 2 binaries: 
- /bin/cwebp
- /usr/bin/cwebp
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Linux)... We do. We in fact have 3
Found 3 binaries: 
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static
- [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64
Detecting versions of the cwebp binaries found
- Executing: cwebp -version. Result: version: *0.3.0*
- Executing: /bin/cwebp -version. Result: version: *0.3.0*
- Executing: /usr/bin/cwebp -version. Result: version: *0.3.0*
- Executing: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64 -version. Result: *Exec failed*. Permission denied (user: "u761618479" does not have permission to execute that binary)
- Executing: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static -version. Result: *Exec failed*. Permission denied (user: "u761618479" does not have permission to execute that binary)
- Executing: [doc-root]/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64 -version. Result: *Exec failed*. Permission denied (user: "u761618479" does not have permission to execute that binary)
Binaries ordered by version number.
- cwebp: (version: 0.3.0)
- /bin/cwebp: (version: 0.3.0)
- /usr/bin/cwebp: (version: 0.3.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 0.3.0
*The near-lossless option is not supported on this (rather old) version of cwebp- skipping it.* 
Trying to convert by executing the following command:
nice cwebp -metadata none -q 85 -alpha_q '85' -lossless -m 6 -low_memory '[doc-root]/wp-content/uploads/thegem-logos/logo_c88e3c364cb16c64e85cb1a8ddce90ee_2x.png' -o '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/thegem-logos/logo_c88e3c364cb16c64e85cb1a8ddce90ee_2x.png.webp.lossless.webp' 2>&1

*Output:* 
Saving file '[doc-root]/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/thegem-logos/logo_c88e3c364cb16c64e85cb1a8ddce90ee_2x.png.webp.lossless.webp'
File:      [doc-root]/wp-content/uploads/thegem-logos/logo_c88e3c364cb16c64e85cb1a8ddce90ee_2x.png
Dimension: 259 x 78
Output:    4552 bytes
Lossless-ARGB compressed size: 4552 bytes
  * Lossless features used: SUBTRACT-GREEN
  * Precision Bits: histogram=2 transform=3 cache=9

Success
Reduction: 45% (went from 8235 bytes to 4552 bytes)

Picking lossy
cwebp succeeded :)

Converted image in 973 ms, reducing file size with 54% (went from 8235 bytes to 3816 bytes)

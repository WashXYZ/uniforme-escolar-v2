<style>

@font-face{
    font-family: 'Source Sans Pro';
    font-weight: 200;
    font-style: normal;
    font-stretch: normal;
    src: url('<?= get_template_directory_uri()?>/fonts/source-sans/WOFF2/TTF/SourceSansPro-ExtraLight.ttf.woff2') format('woff2'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/WOFF/OTF/SourceSansPro-ExtraLight.otf.woff') format('woff'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/OTF/SourceSansPro-ExtraLight.otf') format('opentype'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/TTF/SourceSansPro-ExtraLight.ttf') format('truetype');
}

@font-face{
    font-family: 'Source Sans Pro';
    font-weight: 200;
    font-style: italic;
    font-stretch: normal;
    src: url('<?= get_template_directory_uri()?>/fonts/source-sans/WOFF2/TTF/SourceSansPro-ExtraLightIt.ttf.woff2') format('woff2'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/WOFF/OTF/SourceSansPro-ExtraLightIt.otf.woff') format('woff'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/OTF/SourceSansPro-ExtraLightIt.otf') format('opentype'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/TTF/SourceSansPro-ExtraLightIt.ttf') format('truetype');
}

@font-face{
    font-family: 'Source Sans Pro';
    font-weight: 300;
    font-style: normal;
    font-stretch: normal;
    src: url('<?= get_template_directory_uri()?>/fonts/source-sans/WOFF2/TTF/SourceSansPro-Light.ttf.woff2') format('woff2'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/WOFF/OTF/SourceSansPro-Light.otf.woff') format('woff'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/OTF/SourceSansPro-Light.otf') format('opentype'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/TTF/SourceSansPro-Light.ttf') format('truetype');
}

@font-face{
    font-family: 'Source Sans Pro';
    font-weight: 300;
    font-style: italic;
    font-stretch: normal;
    src: url('<?= get_template_directory_uri()?>/fonts/source-sans/WOFF2/TTF/SourceSansPro-LightIt.ttf.woff2') format('woff2'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/WOFF/OTF/SourceSansPro-LightIt.otf.woff') format('woff'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/OTF/SourceSansPro-LightIt.otf') format('opentype'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/TTF/SourceSansPro-LightIt.ttf') format('truetype');
}

@font-face{
    font-family: 'Source Sans Pro';
    font-weight: 400;
    font-style: normal;
    font-stretch: normal;
    src: url('<?= get_template_directory_uri()?>/fonts/source-sans/WOFF2/TTF/SourceSansPro-Regular.ttf.woff2') format('woff2'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/WOFF/OTF/SourceSansPro-Regular.otf.woff') format('woff'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/OTF/SourceSansPro-Regular.otf') format('opentype'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/TTF/SourceSansPro-Regular.ttf') format('truetype');
}

@font-face{
    font-family: 'Source Sans Pro';
    font-weight: 400;
    font-style: italic;
    font-stretch: normal;
    src: url('<?= get_template_directory_uri()?>/fonts/source-sans/WOFF2/TTF/SourceSansPro-It.ttf.woff2') format('woff2'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/WOFF/OTF/SourceSansPro-It.otf.woff') format('woff'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/OTF/SourceSansPro-It.otf') format('opentype'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/TTF/SourceSansPro-It.ttf') format('truetype');
}

@font-face{
    font-family: 'Source Sans Pro';
    font-weight: 600;
    font-style: normal;
    font-stretch: normal;
    src: url('<?= get_template_directory_uri()?>/fonts/source-sans/WOFF2/TTF/SourceSansPro-Semibold.ttf.woff2') format('woff2'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/WOFF/OTF/SourceSansPro-Semibold.otf.woff') format('woff'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/OTF/SourceSansPro-Semibold.otf') format('opentype'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/TTF/SourceSansPro-Semibold.ttf') format('truetype');
}

@font-face{
    font-family: 'Source Sans Pro';
    font-weight: 600;
    font-style: italic;
    font-stretch: normal;
    src: url('<?= get_template_directory_uri()?>/fonts/source-sans/WOFF2/TTF/SourceSansPro-SemiboldIt.ttf.woff2') format('woff2'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/WOFF/OTF/SourceSansPro-SemiboldIt.otf.woff') format('woff'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/OTF/SourceSansPro-SemiboldIt.otf') format('opentype'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/TTF/SourceSansPro-SemiboldIt.ttf') format('truetype');
}

@font-face{
    font-family: 'Source Sans Pro';
    font-weight: 700;
    font-style: normal;
    font-stretch: normal;
    src: url('<?= get_template_directory_uri()?>/fonts/source-sans/WOFF2/TTF/SourceSansPro-Bold.ttf.woff2') format('woff2'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/WOFF/OTF/SourceSansPro-Bold.otf.woff') format('woff'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/OTF/SourceSansPro-Bold.otf') format('opentype'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/TTF/SourceSansPro-Bold.ttf') format('truetype');
}

@font-face{
    font-family: 'Source Sans Pro';
    font-weight: 700;
    font-style: italic;
    font-stretch: normal;
    src: url('<?= get_template_directory_uri()?>/fonts/source-sans/WOFF2/TTF/SourceSansPro-BoldIt.ttf.woff2') format('woff2'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/WOFF/OTF/SourceSansPro-BoldIt.otf.woff') format('woff'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/OTF/SourceSansPro-BoldIt.otf') format('opentype'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/TTF/SourceSansPro-BoldIt.ttf') format('truetype');
}

@font-face{
    font-family: 'Source Sans Pro';
    font-weight: 900;
    font-style: normal;
    font-stretch: normal;
    src: url('<?= get_template_directory_uri()?>/fonts/source-sans/WOFF2/TTF/SourceSansPro-Black.ttf.woff2') format('woff2'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/WOFF/OTF/SourceSansPro-Black.otf.woff') format('woff'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/OTF/SourceSansPro-Black.otf') format('opentype'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/TTF/SourceSansPro-Black.ttf') format('truetype');
}

@font-face{
    font-family: 'Source Sans Pro';
    font-weight: 900;
    font-style: italic;
    font-stretch: normal;
    src: url('<?= get_template_directory_uri()?>/fonts/source-sans/WOFF2/TTF/SourceSansPro-BlackIt.ttf.woff2') format('woff2'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/WOFF/OTF/SourceSansPro-BlackIt.otf.woff') format('woff'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/OTF/SourceSansPro-BlackIt.otf') format('opentype'),
         url('<?= get_template_directory_uri()?>/fonts/source-sans/TTF/SourceSansPro-BlackIt.ttf') format('truetype');
}


/** =================== MONTSERRAT =================== **/

/** Montserrat Thin **/
@font-face {
    font-family: "Montserrat";
    font-weight: 100;
    font-style: normal;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-Thin.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-Thin.woff") format("woff");
}

/** Montserrat Thin-Italic **/
@font-face {
    font-family: "Montserrat";
    font-weight: 100;
    font-style: italic;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-ThinItalic.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-ThinItalic.woff") format("woff");
}

/** Montserrat ExtraLight **/
@font-face {
    font-family: "Montserrat";
    font-weight: 200;
    font-style: normal;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-ExtraLight.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-ExtraLight.woff") format("woff");
}

/** Montserrat ExtraLight-Italic **/
@font-face {
    font-family: "Montserrat";
    font-weight: 200;
    font-style: italic;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-ExtraLightItalic.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-ExtraLightItalic.woff") format("woff");
}

/** Montserrat Light **/
@font-face {
    font-family: "Montserrat";
    font-weight: 300;
    font-style: normal;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-Light.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-Light.woff") format("woff");
}

/** Montserrat Light-Italic **/
@font-face {
    font-family: "Montserrat";
    font-weight: 300;
    font-style: italic;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-LightItalic.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-LightItalic.woff") format("woff");
}

/** Montserrat Regular **/
@font-face {
    font-family: "Montserrat";
    font-weight: 400;
    font-style: normal;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-Regular.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-Regular.woff") format("woff");
}

/** Montserrat Regular-Italic **/
@font-face {
    font-family: "Montserrat";
    font-weight: 400;
    font-style: italic;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-Italic.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-Italic.woff") format("woff");
}

/** Montserrat Medium **/
@font-face {
    font-family: "Montserrat";
    font-weight: 500;
    font-style: normal;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-Medium.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-Medium.woff") format("woff");
}

/** Montserrat Medium-Italic **/
@font-face {
    font-family: "Montserrat";
    font-weight: 500;
    font-style: italic;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-MediumItalic.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-MediumItalic.woff") format("woff");
}

/** Montserrat SemiBold **/
@font-face {
    font-family: "Montserrat";
    font-weight: 600;
    font-style: normal;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-SemiBold.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-SemiBold.woff") format("woff");
}

/** Montserrat SemiBold-Italic **/
@font-face {
    font-family: "Montserrat";
    font-weight: 600;
    font-style: italic;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-SemiBoldItalic.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-SemiBoldItalic.woff") format("woff");
}

/** Montserrat Bold **/
@font-face {
    font-family: "Montserrat";
    font-weight: 700;
    font-style: normal;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-Bold.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-Bold.woff") format("woff");
}

/** Montserrat Bold-Italic **/
@font-face {
    font-family: "Montserrat";
    font-weight: 700;
    font-style: italic;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-BoldItalic.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-BoldItalic.woff") format("woff");
}

/** Montserrat ExtraBold **/
@font-face {
    font-family: "Montserrat";
    font-weight: 800;
    font-style: normal;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-ExtraBold.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-ExtraBold.woff") format("woff");
}

/** Montserrat ExtraBold-Italic **/
@font-face {
    font-family: "Montserrat";
    font-weight: 800;
    font-style: italic;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-ExtraBoldItalic.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-ExtraBoldItalic.woff") format("woff");
}

/** Montserrat Black **/
@font-face {
    font-family: "Montserrat";
    font-weight: 900;
    font-style: normal;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-Black.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-Black.woff") format("woff");
}

/** Montserrat Black-Italic **/
@font-face {
    font-family: "Montserrat";
    font-weight: 900;
    font-style: italic;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-BlackItalic.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/Montserrat-BlackItalic.woff") format("woff");
}

/** =================== MONTSERRAT ALTERNATES =================== **/

/** Montserrat Alternates Thin **/
@font-face {
    font-family: "Montserrat Alternates";
    font-weight: 100;
    font-style: normal;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-Thin.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-Thin.woff") format("woff");
}

/** Montserrat Alternates Thin-Italic **/
@font-face {
    font-family: "Montserrat Alternates";
    font-weight: 100;
    font-style: italic;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-ThinItalic.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-ThinItalic.woff") format("woff");
}

/** Montserrat Alternates ExtraLight **/
@font-face {
    font-family: "Montserrat Alternates";
    font-weight: 200;
    font-style: normal;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-ExtraLight.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-ExtraLight.woff") format("woff");
}

/** Montserrat Alternates ExtraLight-Italic **/
@font-face {
    font-family: "Montserrat Alternates";
    font-weight: 200;
    font-style: italic;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-ExtraLightItalic.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-ExtraLightItalic.woff") format("woff");
}

/** Montserrat Alternates Light **/
@font-face {
    font-family: "Montserrat Alternates";
    font-weight: 300;
    font-style: normal;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-Light.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-Light.woff") format("woff");
}

/** Montserrat Alternates Light-Italic **/
@font-face {
    font-family: "Montserrat Alternates";
    font-weight: 300;
    font-style: italic;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-LightItalic.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-LightItalic.woff") format("woff");
}

/** Montserrat Alternates Regular **/
@font-face {
    font-family: "Montserrat Alternates";
    font-weight: 400;
    font-style: normal;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-Regular.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-Regular.woff") format("woff");
}

/** Montserrat Alternates Regular-Italic **/
@font-face {
    font-family: "Montserrat Alternates";
    font-weight: 400;
    font-style: italic;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-Italic.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-Italic.woff") format("woff");
}

/** Montserrat Alternates Medium **/
@font-face {
    font-family: "Montserrat Alternates";
    font-weight: 500;
    font-style: normal;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-Medium.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-Medium.woff") format("woff");
}

/** Montserrat Alternates Medium-Italic **/
@font-face {
    font-family: "Montserrat Alternates";
    font-weight: 500;
    font-style: italic;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-MediumItalic.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-MediumItalic.woff") format("woff");
}

/** Montserrat Alternates SemiBold **/
@font-face {
    font-family: "Montserrat Alternates";
    font-weight: 600;
    font-style: normal;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-SemiBold.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-SemiBold.woff") format("woff");
}

/** Montserrat Alternates SemiBold-Italic **/
@font-face {
    font-family: "Montserrat Alternates";
    font-weight: 600;
    font-style: italic;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-SemiBoldItalic.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-SemiBoldItalic.woff") format("woff");
}

/** Montserrat Alternates Bold **/
@font-face {
    font-family: "Montserrat Alternates";
    font-weight: 700;
    font-style: normal;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-Bold.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-Bold.woff") format("woff");
}

/** Montserrat Alternates Bold-Italic **/
@font-face {
    font-family: "Montserrat Alternates";
    font-weight: 700;
    font-style: italic;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-BoldItalic.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-BoldItalic.woff") format("woff");
}

/** Montserrat Alternates ExtraBold **/
@font-face {
    font-family: "Montserrat Alternates";
    font-weight: 800;
    font-style: normal;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-ExtraBold.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-ExtraBold.woff") format("woff");
}

/** Montserrat Alternates ExtraBold-Italic **/
@font-face {
    font-family: "Montserrat Alternates";
    font-weight: 800;
    font-style: italic;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-ExtraBoldItalic.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-ExtraBoldItalic.woff") format("woff");
}

/** Montserrat Alternates Black **/
@font-face {
    font-family: "Montserrat Alternates";
    font-weight: 900;
    font-style: normal;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-Black.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-Black.woff") format("woff");
}

/** Montserrat Alternates Black-Italic **/
@font-face {
    font-family: "Montserrat";
    font-weight: 900;
    font-style: italic;
    src: url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-BlackItalic.woff2") format("woff2"),
         url("<?= get_template_directory_uri()?>/fonts/montserrat/webfonts/MontserratAlternates-BlackItalic.woff") format("woff");
}

</style>
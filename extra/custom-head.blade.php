{{-- 


|--------------------------------------------------------------------------
| Custom assets
|--------------------------------------------------------------------------

Custom assets are stored in the 'custom-assets' directory found inside the 'extra' folder.
Custom assets can be any file you would like to use in your theme.
For example: JS, CSS or image files.

You can load these custom assets with a built-in function, 'themeAsset()'.
Add the file you want to add to your 'custom-assets' folder, and include the name with the file extension in the function.

Down below, you can find a few examples using this function:



--}}

<style> 
/* latin */
@font-face { font-family: 'Karla'; font-style: normal; font-weight: 400;
  font-stretch: 100%; font-display: swap; src: url('{{themeAsset('karla-latin-400-normal.woff2')}}'), url('{{themeAsset('karla-latin-400-normal.woff')}}'); 
  unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;
}

html {
    font-size: 100%; }

  :root {
    --bgColor: #f5af19;
    --bgColor2: #f12711;
    --accentColor: #FFF;
    --font: 'Roboto', sans-serif;
    --delay: .3s; }
</style>
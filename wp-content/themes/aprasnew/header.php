<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>

<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->

<meta charset="<?php bloginfo( 'charset' ); ?>">


<title>  <?= bloginfo( 'name' ); ?> </title>

</head>

<body>

<style>

html,
body {
  height: 100%;
  position: relative;
  scroll-behavior: smooth;
  background-color: #f0f3f2 !important;
}

html {
  margin: 0px !important;
}

.margin-auto {
  margin: 0 auto;
}

.bg-img-defaut {
  background-position: center !important;
  background-repeat: no-repeat !important;
}

.btn {
  border-radius: 0px !important;
}

.bg-inverse {
  background: #f1f1f1;
}

.bg-ternary {
  background: #003e81;
}

.bg-green {
  background: #67bdad;
}

.inner-contato-box {
  border: 3px solid white;
  height: 100%;
  width: 100%;
  padding: 32px;
}

.d-flex {
  flex-wrap: wrap;
}

.lb-rounded-1 {
  border-bottom-left-radius: 1px !important;
}

.minh-1 {
  min-height: 1px !important;
}

.rb-rounded-1 {
  border-bottom-right-radius: 1px !important;
}

.lt-rounded-1 {
  border-top-left-radius: 1px !important;
}

.rt-rounded-1 {
  border-top-right-radius: 1px !important;
}

.mt-1 {
  margin-top: 1px !important;
}

.mb-1 {
  margin-bottom: 1px !important;
}

.mr-1 {
  margin-right: 1px !important;
}

.ml-1 {
  margin-left: 1px !important;
}

.mx-1 {
  margin-left: 1px !important;
  margin-right: 1px !important;
}

.my-1 {
  margin-top: 1px !important;
  margin-bottom: 1px !important;
}

.pt-1 {
  padding-top: 1px !important;
}

.pb-1 {
  padding-bottom: 1px !important;
}

.pr-1 {
  padding-right: 1px !important;
}

.pl-1 {
  padding-left: 1px !important;
}

.px-1 {
  padding-left: 1px !important;
  padding-right: 1px !important;
}

.py-1 {
  padding-top: 1px !important;
  padding-bottom: 1px !important;
}

.p-1 {
  padding: 1px !important;
}

.m-1 {
  margin: 1px !important;
}

.w-1 {
  width: 1%!important;
}

.lb-rounded-2 {
  border-bottom-left-radius: 2px !important;
}

.minh-2 {
  min-height: 2px !important;
}

.rb-rounded-2 {
  border-bottom-right-radius: 2px !important;
}

.lt-rounded-2 {
  border-top-left-radius: 2px !important;
}

.rt-rounded-2 {
  border-top-right-radius: 2px !important;
}

.mt-2 {
  margin-top: 2px !important;
}

.mb-2 {
  margin-bottom: 2px !important;
}

.mr-2 {
  margin-right: 2px !important;
}

.ml-2 {
  margin-left: 2px !important;
}

.mx-2 {
  margin-left: 2px !important;
  margin-right: 2px !important;
}

.my-2 {
  margin-top: 2px !important;
  margin-bottom: 2px !important;
}

.pt-2 {
  padding-top: 2px !important;
}

.pb-2 {
  padding-bottom: 2px !important;
}

.pr-2 {
  padding-right: 2px !important;
}

.pl-2 {
  padding-left: 2px !important;
}

.px-2 {
  padding-left: 2px !important;
  padding-right: 2px !important;
}

.py-2 {
  padding-top: 2px !important;
  padding-bottom: 2px !important;
}

.p-2 {
  padding: 2px !important;
}

.m-2 {
  margin: 2px !important;
}

.w-2 {
  width: 2%!important;
}

.lb-rounded-3 {
  border-bottom-left-radius: 3px !important;
}

.minh-3 {
  min-height: 3px !important;
}

.rb-rounded-3 {
  border-bottom-right-radius: 3px !important;
}

.lt-rounded-3 {
  border-top-left-radius: 3px !important;
}

.rt-rounded-3 {
  border-top-right-radius: 3px !important;
}

.mt-3 {
  margin-top: 3px !important;
}

.mb-3 {
  margin-bottom: 3px !important;
}

.mr-3 {
  margin-right: 3px !important;
}

.ml-3 {
  margin-left: 3px !important;
}

.mx-3 {
  margin-left: 3px !important;
  margin-right: 3px !important;
}

.my-3 {
  margin-top: 3px !important;
  margin-bottom: 3px !important;
}

.pt-3 {
  padding-top: 3px !important;
}

.pb-3 {
  padding-bottom: 3px !important;
}

.pr-3 {
  padding-right: 3px !important;
}

.pl-3 {
  padding-left: 3px !important;
}

.px-3 {
  padding-left: 3px !important;
  padding-right: 3px !important;
}

.py-3 {
  padding-top: 3px !important;
  padding-bottom: 3px !important;
}

.p-3 {
  padding: 3px !important;
}

.m-3 {
  margin: 3px !important;
}

.w-3 {
  width: 3%!important;
}

.lb-rounded-4 {
  border-bottom-left-radius: 4px !important;
}

.minh-4 {
  min-height: 4px !important;
}

.rb-rounded-4 {
  border-bottom-right-radius: 4px !important;
}

.lt-rounded-4 {
  border-top-left-radius: 4px !important;
}

.rt-rounded-4 {
  border-top-right-radius: 4px !important;
}

.mt-4 {
  margin-top: 4px !important;
}

.mb-4 {
  margin-bottom: 4px !important;
}

.mr-4 {
  margin-right: 4px !important;
}

.ml-4 {
  margin-left: 4px !important;
}

.mx-4 {
  margin-left: 4px !important;
  margin-right: 4px !important;
}

.my-4 {
  margin-top: 4px !important;
  margin-bottom: 4px !important;
}

.pt-4 {
  padding-top: 4px !important;
}

.pb-4 {
  padding-bottom: 4px !important;
}

.pr-4 {
  padding-right: 4px !important;
}

.pl-4 {
  padding-left: 4px !important;
}

.px-4 {
  padding-left: 4px !important;
  padding-right: 4px !important;
}

.py-4 {
  padding-top: 4px !important;
  padding-bottom: 4px !important;
}

.p-4 {
  padding: 4px !important;
}

.m-4 {
  margin: 4px !important;
}

.w-4 {
  width: 4%!important;
}

.lb-rounded-5 {
  border-bottom-left-radius: 5px !important;
}

.minh-5 {
  min-height: 5px !important;
}

.rb-rounded-5 {
  border-bottom-right-radius: 5px !important;
}

.lt-rounded-5 {
  border-top-left-radius: 5px !important;
}

.rt-rounded-5 {
  border-top-right-radius: 5px !important;
}

.mt-5 {
  margin-top: 5px !important;
}

.mb-5 {
  margin-bottom: 5px !important;
}

.mr-5 {
  margin-right: 5px !important;
}

.ml-5 {
  margin-left: 5px !important;
}

.mx-5 {
  margin-left: 5px !important;
  margin-right: 5px !important;
}

.my-5 {
  margin-top: 5px !important;
  margin-bottom: 5px !important;
}

.pt-5 {
  padding-top: 5px !important;
}

.pb-5 {
  padding-bottom: 5px !important;
}

.pr-5 {
  padding-right: 5px !important;
}

.pl-5 {
  padding-left: 5px !important;
}

.px-5 {
  padding-left: 5px !important;
  padding-right: 5px !important;
}

.py-5 {
  padding-top: 5px !important;
  padding-bottom: 5px !important;
}

.p-5 {
  padding: 5px !important;
}

.m-5 {
  margin: 5px !important;
}

.w-5 {
  width: 5%!important;
}

.lb-rounded-6 {
  border-bottom-left-radius: 6px !important;
}

.minh-6 {
  min-height: 6px !important;
}

.rb-rounded-6 {
  border-bottom-right-radius: 6px !important;
}

.lt-rounded-6 {
  border-top-left-radius: 6px !important;
}

.rt-rounded-6 {
  border-top-right-radius: 6px !important;
}

.mt-6 {
  margin-top: 6px !important;
}

.mb-6 {
  margin-bottom: 6px !important;
}

.mr-6 {
  margin-right: 6px !important;
}

.ml-6 {
  margin-left: 6px !important;
}

.mx-6 {
  margin-left: 6px !important;
  margin-right: 6px !important;
}

.my-6 {
  margin-top: 6px !important;
  margin-bottom: 6px !important;
}

.pt-6 {
  padding-top: 6px !important;
}

.pb-6 {
  padding-bottom: 6px !important;
}

.pr-6 {
  padding-right: 6px !important;
}

.pl-6 {
  padding-left: 6px !important;
}

.px-6 {
  padding-left: 6px !important;
  padding-right: 6px !important;
}

.py-6 {
  padding-top: 6px !important;
  padding-bottom: 6px !important;
}

.p-6 {
  padding: 6px !important;
}

.m-6 {
  margin: 6px !important;
}

.w-6 {
  width: 6%!important;
}

.lb-rounded-7 {
  border-bottom-left-radius: 7px !important;
}

.minh-7 {
  min-height: 7px !important;
}

.rb-rounded-7 {
  border-bottom-right-radius: 7px !important;
}

.lt-rounded-7 {
  border-top-left-radius: 7px !important;
}

.rt-rounded-7 {
  border-top-right-radius: 7px !important;
}

.mt-7 {
  margin-top: 7px !important;
}

.mb-7 {
  margin-bottom: 7px !important;
}

.mr-7 {
  margin-right: 7px !important;
}

.ml-7 {
  margin-left: 7px !important;
}

.mx-7 {
  margin-left: 7px !important;
  margin-right: 7px !important;
}

.my-7 {
  margin-top: 7px !important;
  margin-bottom: 7px !important;
}

.pt-7 {
  padding-top: 7px !important;
}

.pb-7 {
  padding-bottom: 7px !important;
}

.pr-7 {
  padding-right: 7px !important;
}

.pl-7 {
  padding-left: 7px !important;
}

.px-7 {
  padding-left: 7px !important;
  padding-right: 7px !important;
}

.py-7 {
  padding-top: 7px !important;
  padding-bottom: 7px !important;
}

.p-7 {
  padding: 7px !important;
}

.m-7 {
  margin: 7px !important;
}

.w-7 {
  width: 7%!important;
}

.lb-rounded-8 {
  border-bottom-left-radius: 8px !important;
}

.minh-8 {
  min-height: 8px !important;
}

.rb-rounded-8 {
  border-bottom-right-radius: 8px !important;
}

.lt-rounded-8 {
  border-top-left-radius: 8px !important;
}

.rt-rounded-8 {
  border-top-right-radius: 8px !important;
}

.mt-8 {
  margin-top: 8px !important;
}

.mb-8 {
  margin-bottom: 8px !important;
}

.mr-8 {
  margin-right: 8px !important;
}

.ml-8 {
  margin-left: 8px !important;
}

.mx-8 {
  margin-left: 8px !important;
  margin-right: 8px !important;
}

.my-8 {
  margin-top: 8px !important;
  margin-bottom: 8px !important;
}

.pt-8 {
  padding-top: 8px !important;
}

.pb-8 {
  padding-bottom: 8px !important;
}

.pr-8 {
  padding-right: 8px !important;
}

.pl-8 {
  padding-left: 8px !important;
}

.px-8 {
  padding-left: 8px !important;
  padding-right: 8px !important;
}

.py-8 {
  padding-top: 8px !important;
  padding-bottom: 8px !important;
}

.p-8 {
  padding: 8px !important;
}

.m-8 {
  margin: 8px !important;
}

.w-8 {
  width: 8%!important;
}

.lb-rounded-9 {
  border-bottom-left-radius: 9px !important;
}

.minh-9 {
  min-height: 9px !important;
}

.rb-rounded-9 {
  border-bottom-right-radius: 9px !important;
}

.lt-rounded-9 {
  border-top-left-radius: 9px !important;
}

.rt-rounded-9 {
  border-top-right-radius: 9px !important;
}

.mt-9 {
  margin-top: 9px !important;
}

.mb-9 {
  margin-bottom: 9px !important;
}

.mr-9 {
  margin-right: 9px !important;
}

.ml-9 {
  margin-left: 9px !important;
}

.mx-9 {
  margin-left: 9px !important;
  margin-right: 9px !important;
}

.my-9 {
  margin-top: 9px !important;
  margin-bottom: 9px !important;
}

.pt-9 {
  padding-top: 9px !important;
}

.pb-9 {
  padding-bottom: 9px !important;
}

.pr-9 {
  padding-right: 9px !important;
}

.pl-9 {
  padding-left: 9px !important;
}

.px-9 {
  padding-left: 9px !important;
  padding-right: 9px !important;
}

.py-9 {
  padding-top: 9px !important;
  padding-bottom: 9px !important;
}

.p-9 {
  padding: 9px !important;
}

.m-9 {
  margin: 9px !important;
}

.w-9 {
  width: 9%!important;
}

.lb-rounded-10 {
  border-bottom-left-radius: 10px !important;
}

.minh-10 {
  min-height: 10px !important;
}

.rb-rounded-10 {
  border-bottom-right-radius: 10px !important;
}

.lt-rounded-10 {
  border-top-left-radius: 10px !important;
}

.rt-rounded-10 {
  border-top-right-radius: 10px !important;
}

.mt-10 {
  margin-top: 10px !important;
}

.mb-10 {
  margin-bottom: 10px !important;
}

.mr-10 {
  margin-right: 10px !important;
}

.ml-10 {
  margin-left: 10px !important;
}

.mx-10 {
  margin-left: 10px !important;
  margin-right: 10px !important;
}

.my-10 {
  margin-top: 10px !important;
  margin-bottom: 10px !important;
}

.pt-10 {
  padding-top: 10px !important;
}

.pb-10 {
  padding-bottom: 10px !important;
}

.pr-10 {
  padding-right: 10px !important;
}

.pl-10 {
  padding-left: 10px !important;
}

.px-10 {
  padding-left: 10px !important;
  padding-right: 10px !important;
}

.py-10 {
  padding-top: 10px !important;
  padding-bottom: 10px !important;
}

.p-10 {
  padding: 10px !important;
}

.m-10 {
  margin: 10px !important;
}

.w-10 {
  width: 10%!important;
}

.lb-rounded-11 {
  border-bottom-left-radius: 11px !important;
}

.minh-11 {
  min-height: 11px !important;
}

.rb-rounded-11 {
  border-bottom-right-radius: 11px !important;
}

.lt-rounded-11 {
  border-top-left-radius: 11px !important;
}

.rt-rounded-11 {
  border-top-right-radius: 11px !important;
}

.mt-11 {
  margin-top: 11px !important;
}

.mb-11 {
  margin-bottom: 11px !important;
}

.mr-11 {
  margin-right: 11px !important;
}

.ml-11 {
  margin-left: 11px !important;
}

.mx-11 {
  margin-left: 11px !important;
  margin-right: 11px !important;
}

.my-11 {
  margin-top: 11px !important;
  margin-bottom: 11px !important;
}

.pt-11 {
  padding-top: 11px !important;
}

.pb-11 {
  padding-bottom: 11px !important;
}

.pr-11 {
  padding-right: 11px !important;
}

.pl-11 {
  padding-left: 11px !important;
}

.px-11 {
  padding-left: 11px !important;
  padding-right: 11px !important;
}

.py-11 {
  padding-top: 11px !important;
  padding-bottom: 11px !important;
}

.p-11 {
  padding: 11px !important;
}

.m-11 {
  margin: 11px !important;
}

.w-11 {
  width: 11%!important;
}

.lb-rounded-12 {
  border-bottom-left-radius: 12px !important;
}

.minh-12 {
  min-height: 12px !important;
}

.rb-rounded-12 {
  border-bottom-right-radius: 12px !important;
}

.lt-rounded-12 {
  border-top-left-radius: 12px !important;
}

.rt-rounded-12 {
  border-top-right-radius: 12px !important;
}

.mt-12 {
  margin-top: 12px !important;
}

.mb-12 {
  margin-bottom: 12px !important;
}

.mr-12 {
  margin-right: 12px !important;
}

.ml-12 {
  margin-left: 12px !important;
}

.mx-12 {
  margin-left: 12px !important;
  margin-right: 12px !important;
}

.my-12 {
  margin-top: 12px !important;
  margin-bottom: 12px !important;
}

.pt-12 {
  padding-top: 12px !important;
}

.pb-12 {
  padding-bottom: 12px !important;
}

.pr-12 {
  padding-right: 12px !important;
}

.pl-12 {
  padding-left: 12px !important;
}

.px-12 {
  padding-left: 12px !important;
  padding-right: 12px !important;
}

.py-12 {
  padding-top: 12px !important;
  padding-bottom: 12px !important;
}

.p-12 {
  padding: 12px !important;
}

.m-12 {
  margin: 12px !important;
}

.w-12 {
  width: 12%!important;
}

.lb-rounded-13 {
  border-bottom-left-radius: 13px !important;
}

.minh-13 {
  min-height: 13px !important;
}

.rb-rounded-13 {
  border-bottom-right-radius: 13px !important;
}

.lt-rounded-13 {
  border-top-left-radius: 13px !important;
}

.rt-rounded-13 {
  border-top-right-radius: 13px !important;
}

.mt-13 {
  margin-top: 13px !important;
}

.mb-13 {
  margin-bottom: 13px !important;
}

.mr-13 {
  margin-right: 13px !important;
}

.ml-13 {
  margin-left: 13px !important;
}

.mx-13 {
  margin-left: 13px !important;
  margin-right: 13px !important;
}

.my-13 {
  margin-top: 13px !important;
  margin-bottom: 13px !important;
}

.pt-13 {
  padding-top: 13px !important;
}

.pb-13 {
  padding-bottom: 13px !important;
}

.pr-13 {
  padding-right: 13px !important;
}

.pl-13 {
  padding-left: 13px !important;
}

.px-13 {
  padding-left: 13px !important;
  padding-right: 13px !important;
}

.py-13 {
  padding-top: 13px !important;
  padding-bottom: 13px !important;
}

.p-13 {
  padding: 13px !important;
}

.m-13 {
  margin: 13px !important;
}

.w-13 {
  width: 13%!important;
}

.lb-rounded-14 {
  border-bottom-left-radius: 14px !important;
}

.minh-14 {
  min-height: 14px !important;
}

.rb-rounded-14 {
  border-bottom-right-radius: 14px !important;
}

.lt-rounded-14 {
  border-top-left-radius: 14px !important;
}

.rt-rounded-14 {
  border-top-right-radius: 14px !important;
}

.mt-14 {
  margin-top: 14px !important;
}

.mb-14 {
  margin-bottom: 14px !important;
}

.mr-14 {
  margin-right: 14px !important;
}

.ml-14 {
  margin-left: 14px !important;
}

.mx-14 {
  margin-left: 14px !important;
  margin-right: 14px !important;
}

.my-14 {
  margin-top: 14px !important;
  margin-bottom: 14px !important;
}

.pt-14 {
  padding-top: 14px !important;
}

.pb-14 {
  padding-bottom: 14px !important;
}

.pr-14 {
  padding-right: 14px !important;
}

.pl-14 {
  padding-left: 14px !important;
}

.px-14 {
  padding-left: 14px !important;
  padding-right: 14px !important;
}

.py-14 {
  padding-top: 14px !important;
  padding-bottom: 14px !important;
}

.p-14 {
  padding: 14px !important;
}

.m-14 {
  margin: 14px !important;
}

.w-14 {
  width: 14%!important;
}

.lb-rounded-15 {
  border-bottom-left-radius: 15px !important;
}

.minh-15 {
  min-height: 15px !important;
}

.rb-rounded-15 {
  border-bottom-right-radius: 15px !important;
}

.lt-rounded-15 {
  border-top-left-radius: 15px !important;
}

.rt-rounded-15 {
  border-top-right-radius: 15px !important;
}

.mt-15 {
  margin-top: 15px !important;
}

.mb-15 {
  margin-bottom: 15px !important;
}

.mr-15 {
  margin-right: 15px !important;
}

.ml-15 {
  margin-left: 15px !important;
}

.mx-15 {
  margin-left: 15px !important;
  margin-right: 15px !important;
}

.my-15 {
  margin-top: 15px !important;
  margin-bottom: 15px !important;
}

.pt-15 {
  padding-top: 15px !important;
}

.pb-15 {
  padding-bottom: 15px !important;
}

.pr-15 {
  padding-right: 15px !important;
}

.pl-15 {
  padding-left: 15px !important;
}

.px-15 {
  padding-left: 15px !important;
  padding-right: 15px !important;
}

.py-15 {
  padding-top: 15px !important;
  padding-bottom: 15px !important;
}

.p-15 {
  padding: 15px !important;
}

.m-15 {
  margin: 15px !important;
}

.w-15 {
  width: 15%!important;
}

.lb-rounded-16 {
  border-bottom-left-radius: 16px !important;
}

.minh-16 {
  min-height: 16px !important;
}

.rb-rounded-16 {
  border-bottom-right-radius: 16px !important;
}

.lt-rounded-16 {
  border-top-left-radius: 16px !important;
}

.rt-rounded-16 {
  border-top-right-radius: 16px !important;
}

.mt-16 {
  margin-top: 16px !important;
}

.mb-16 {
  margin-bottom: 16px !important;
}

.mr-16 {
  margin-right: 16px !important;
}

.ml-16 {
  margin-left: 16px !important;
}

.mx-16 {
  margin-left: 16px !important;
  margin-right: 16px !important;
}

.my-16 {
  margin-top: 16px !important;
  margin-bottom: 16px !important;
}

.pt-16 {
  padding-top: 16px !important;
}

.pb-16 {
  padding-bottom: 16px !important;
}

.pr-16 {
  padding-right: 16px !important;
}

.pl-16 {
  padding-left: 16px !important;
}

.px-16 {
  padding-left: 16px !important;
  padding-right: 16px !important;
}

.py-16 {
  padding-top: 16px !important;
  padding-bottom: 16px !important;
}

.p-16 {
  padding: 16px !important;
}

.m-16 {
  margin: 16px !important;
}

.w-16 {
  width: 16%!important;
}

.lb-rounded-17 {
  border-bottom-left-radius: 17px !important;
}

.minh-17 {
  min-height: 17px !important;
}

.rb-rounded-17 {
  border-bottom-right-radius: 17px !important;
}

.lt-rounded-17 {
  border-top-left-radius: 17px !important;
}

.rt-rounded-17 {
  border-top-right-radius: 17px !important;
}

.mt-17 {
  margin-top: 17px !important;
}

.mb-17 {
  margin-bottom: 17px !important;
}

.mr-17 {
  margin-right: 17px !important;
}

.ml-17 {
  margin-left: 17px !important;
}

.mx-17 {
  margin-left: 17px !important;
  margin-right: 17px !important;
}

.my-17 {
  margin-top: 17px !important;
  margin-bottom: 17px !important;
}

.pt-17 {
  padding-top: 17px !important;
}

.pb-17 {
  padding-bottom: 17px !important;
}

.pr-17 {
  padding-right: 17px !important;
}

.pl-17 {
  padding-left: 17px !important;
}

.px-17 {
  padding-left: 17px !important;
  padding-right: 17px !important;
}

.py-17 {
  padding-top: 17px !important;
  padding-bottom: 17px !important;
}

.p-17 {
  padding: 17px !important;
}

.m-17 {
  margin: 17px !important;
}

.w-17 {
  width: 17%!important;
}

.lb-rounded-18 {
  border-bottom-left-radius: 18px !important;
}

.minh-18 {
  min-height: 18px !important;
}

.rb-rounded-18 {
  border-bottom-right-radius: 18px !important;
}

.lt-rounded-18 {
  border-top-left-radius: 18px !important;
}

.rt-rounded-18 {
  border-top-right-radius: 18px !important;
}

.mt-18 {
  margin-top: 18px !important;
}

.mb-18 {
  margin-bottom: 18px !important;
}

.mr-18 {
  margin-right: 18px !important;
}

.ml-18 {
  margin-left: 18px !important;
}

.mx-18 {
  margin-left: 18px !important;
  margin-right: 18px !important;
}

.my-18 {
  margin-top: 18px !important;
  margin-bottom: 18px !important;
}

.pt-18 {
  padding-top: 18px !important;
}

.pb-18 {
  padding-bottom: 18px !important;
}

.pr-18 {
  padding-right: 18px !important;
}

.pl-18 {
  padding-left: 18px !important;
}

.px-18 {
  padding-left: 18px !important;
  padding-right: 18px !important;
}

.py-18 {
  padding-top: 18px !important;
  padding-bottom: 18px !important;
}

.p-18 {
  padding: 18px !important;
}

.m-18 {
  margin: 18px !important;
}

.w-18 {
  width: 18%!important;
}

.lb-rounded-19 {
  border-bottom-left-radius: 19px !important;
}

.minh-19 {
  min-height: 19px !important;
}

.rb-rounded-19 {
  border-bottom-right-radius: 19px !important;
}

.lt-rounded-19 {
  border-top-left-radius: 19px !important;
}

.rt-rounded-19 {
  border-top-right-radius: 19px !important;
}

.mt-19 {
  margin-top: 19px !important;
}

.mb-19 {
  margin-bottom: 19px !important;
}

.mr-19 {
  margin-right: 19px !important;
}

.ml-19 {
  margin-left: 19px !important;
}

.mx-19 {
  margin-left: 19px !important;
  margin-right: 19px !important;
}

.my-19 {
  margin-top: 19px !important;
  margin-bottom: 19px !important;
}

.pt-19 {
  padding-top: 19px !important;
}

.pb-19 {
  padding-bottom: 19px !important;
}

.pr-19 {
  padding-right: 19px !important;
}

.pl-19 {
  padding-left: 19px !important;
}

.px-19 {
  padding-left: 19px !important;
  padding-right: 19px !important;
}

.py-19 {
  padding-top: 19px !important;
  padding-bottom: 19px !important;
}

.p-19 {
  padding: 19px !important;
}

.m-19 {
  margin: 19px !important;
}

.w-19 {
  width: 19%!important;
}

.lb-rounded-20 {
  border-bottom-left-radius: 20px !important;
}

.minh-20 {
  min-height: 20px !important;
}

.rb-rounded-20 {
  border-bottom-right-radius: 20px !important;
}

.lt-rounded-20 {
  border-top-left-radius: 20px !important;
}

.rt-rounded-20 {
  border-top-right-radius: 20px !important;
}

.mt-20 {
  margin-top: 20px !important;
}

.mb-20 {
  margin-bottom: 20px !important;
}

.mr-20 {
  margin-right: 20px !important;
}

.ml-20 {
  margin-left: 20px !important;
}

.mx-20 {
  margin-left: 20px !important;
  margin-right: 20px !important;
}

.my-20 {
  margin-top: 20px !important;
  margin-bottom: 20px !important;
}

.pt-20 {
  padding-top: 20px !important;
}

.pb-20 {
  padding-bottom: 20px !important;
}

.pr-20 {
  padding-right: 20px !important;
}

.pl-20 {
  padding-left: 20px !important;
}

.px-20 {
  padding-left: 20px !important;
  padding-right: 20px !important;
}

.py-20 {
  padding-top: 20px !important;
  padding-bottom: 20px !important;
}

.p-20 {
  padding: 20px !important;
}

.m-20 {
  margin: 20px !important;
}

.w-20 {
  width: 20%!important;
}

.lb-rounded-21 {
  border-bottom-left-radius: 21px !important;
}

.minh-21 {
  min-height: 21px !important;
}

.rb-rounded-21 {
  border-bottom-right-radius: 21px !important;
}

.lt-rounded-21 {
  border-top-left-radius: 21px !important;
}

.rt-rounded-21 {
  border-top-right-radius: 21px !important;
}

.mt-21 {
  margin-top: 21px !important;
}

.mb-21 {
  margin-bottom: 21px !important;
}

.mr-21 {
  margin-right: 21px !important;
}

.ml-21 {
  margin-left: 21px !important;
}

.mx-21 {
  margin-left: 21px !important;
  margin-right: 21px !important;
}

.my-21 {
  margin-top: 21px !important;
  margin-bottom: 21px !important;
}

.pt-21 {
  padding-top: 21px !important;
}

.pb-21 {
  padding-bottom: 21px !important;
}

.pr-21 {
  padding-right: 21px !important;
}

.pl-21 {
  padding-left: 21px !important;
}

.px-21 {
  padding-left: 21px !important;
  padding-right: 21px !important;
}

.py-21 {
  padding-top: 21px !important;
  padding-bottom: 21px !important;
}

.p-21 {
  padding: 21px !important;
}

.m-21 {
  margin: 21px !important;
}

.w-21 {
  width: 21%!important;
}

.lb-rounded-22 {
  border-bottom-left-radius: 22px !important;
}

.minh-22 {
  min-height: 22px !important;
}

.rb-rounded-22 {
  border-bottom-right-radius: 22px !important;
}

.lt-rounded-22 {
  border-top-left-radius: 22px !important;
}

.rt-rounded-22 {
  border-top-right-radius: 22px !important;
}

.mt-22 {
  margin-top: 22px !important;
}

.mb-22 {
  margin-bottom: 22px !important;
}

.mr-22 {
  margin-right: 22px !important;
}

.ml-22 {
  margin-left: 22px !important;
}

.mx-22 {
  margin-left: 22px !important;
  margin-right: 22px !important;
}

.my-22 {
  margin-top: 22px !important;
  margin-bottom: 22px !important;
}

.pt-22 {
  padding-top: 22px !important;
}

.pb-22 {
  padding-bottom: 22px !important;
}

.pr-22 {
  padding-right: 22px !important;
}

.pl-22 {
  padding-left: 22px !important;
}

.px-22 {
  padding-left: 22px !important;
  padding-right: 22px !important;
}

.py-22 {
  padding-top: 22px !important;
  padding-bottom: 22px !important;
}

.p-22 {
  padding: 22px !important;
}

.m-22 {
  margin: 22px !important;
}

.w-22 {
  width: 22%!important;
}

.lb-rounded-23 {
  border-bottom-left-radius: 23px !important;
}

.minh-23 {
  min-height: 23px !important;
}

.rb-rounded-23 {
  border-bottom-right-radius: 23px !important;
}

.lt-rounded-23 {
  border-top-left-radius: 23px !important;
}

.rt-rounded-23 {
  border-top-right-radius: 23px !important;
}

.mt-23 {
  margin-top: 23px !important;
}

.mb-23 {
  margin-bottom: 23px !important;
}

.mr-23 {
  margin-right: 23px !important;
}

.ml-23 {
  margin-left: 23px !important;
}

.mx-23 {
  margin-left: 23px !important;
  margin-right: 23px !important;
}

.my-23 {
  margin-top: 23px !important;
  margin-bottom: 23px !important;
}

.pt-23 {
  padding-top: 23px !important;
}

.pb-23 {
  padding-bottom: 23px !important;
}

.pr-23 {
  padding-right: 23px !important;
}

.pl-23 {
  padding-left: 23px !important;
}

.px-23 {
  padding-left: 23px !important;
  padding-right: 23px !important;
}

.py-23 {
  padding-top: 23px !important;
  padding-bottom: 23px !important;
}

.p-23 {
  padding: 23px !important;
}

.m-23 {
  margin: 23px !important;
}

.w-23 {
  width: 23%!important;
}

.lb-rounded-24 {
  border-bottom-left-radius: 24px !important;
}

.minh-24 {
  min-height: 24px !important;
}

.rb-rounded-24 {
  border-bottom-right-radius: 24px !important;
}

.lt-rounded-24 {
  border-top-left-radius: 24px !important;
}

.rt-rounded-24 {
  border-top-right-radius: 24px !important;
}

.mt-24 {
  margin-top: 24px !important;
}

.mb-24 {
  margin-bottom: 24px !important;
}

.mr-24 {
  margin-right: 24px !important;
}

.ml-24 {
  margin-left: 24px !important;
}

.mx-24 {
  margin-left: 24px !important;
  margin-right: 24px !important;
}

.my-24 {
  margin-top: 24px !important;
  margin-bottom: 24px !important;
}

.pt-24 {
  padding-top: 24px !important;
}

.pb-24 {
  padding-bottom: 24px !important;
}

.pr-24 {
  padding-right: 24px !important;
}

.pl-24 {
  padding-left: 24px !important;
}

.px-24 {
  padding-left: 24px !important;
  padding-right: 24px !important;
}

.py-24 {
  padding-top: 24px !important;
  padding-bottom: 24px !important;
}

.p-24 {
  padding: 24px !important;
}

.m-24 {
  margin: 24px !important;
}

.w-24 {
  width: 24%!important;
}

.lb-rounded-25 {
  border-bottom-left-radius: 25px !important;
}

.minh-25 {
  min-height: 25px !important;
}

.rb-rounded-25 {
  border-bottom-right-radius: 25px !important;
}

.lt-rounded-25 {
  border-top-left-radius: 25px !important;
}

.rt-rounded-25 {
  border-top-right-radius: 25px !important;
}

.mt-25 {
  margin-top: 25px !important;
}

.mb-25 {
  margin-bottom: 25px !important;
}

.mr-25 {
  margin-right: 25px !important;
}

.ml-25 {
  margin-left: 25px !important;
}

.mx-25 {
  margin-left: 25px !important;
  margin-right: 25px !important;
}

.my-25 {
  margin-top: 25px !important;
  margin-bottom: 25px !important;
}

.pt-25 {
  padding-top: 25px !important;
}

.pb-25 {
  padding-bottom: 25px !important;
}

.pr-25 {
  padding-right: 25px !important;
}

.pl-25 {
  padding-left: 25px !important;
}

.px-25 {
  padding-left: 25px !important;
  padding-right: 25px !important;
}

.py-25 {
  padding-top: 25px !important;
  padding-bottom: 25px !important;
}

.p-25 {
  padding: 25px !important;
}

.m-25 {
  margin: 25px !important;
}

.w-25 {
  width: 25%!important;
}

.lb-rounded-26 {
  border-bottom-left-radius: 26px !important;
}

.minh-26 {
  min-height: 26px !important;
}

.rb-rounded-26 {
  border-bottom-right-radius: 26px !important;
}

.lt-rounded-26 {
  border-top-left-radius: 26px !important;
}

.rt-rounded-26 {
  border-top-right-radius: 26px !important;
}

.mt-26 {
  margin-top: 26px !important;
}

.mb-26 {
  margin-bottom: 26px !important;
}

.mr-26 {
  margin-right: 26px !important;
}

.ml-26 {
  margin-left: 26px !important;
}

.mx-26 {
  margin-left: 26px !important;
  margin-right: 26px !important;
}

.my-26 {
  margin-top: 26px !important;
  margin-bottom: 26px !important;
}

.pt-26 {
  padding-top: 26px !important;
}

.pb-26 {
  padding-bottom: 26px !important;
}

.pr-26 {
  padding-right: 26px !important;
}

.pl-26 {
  padding-left: 26px !important;
}

.px-26 {
  padding-left: 26px !important;
  padding-right: 26px !important;
}

.py-26 {
  padding-top: 26px !important;
  padding-bottom: 26px !important;
}

.p-26 {
  padding: 26px !important;
}

.m-26 {
  margin: 26px !important;
}

.w-26 {
  width: 26%!important;
}

.lb-rounded-27 {
  border-bottom-left-radius: 27px !important;
}

.minh-27 {
  min-height: 27px !important;
}

.rb-rounded-27 {
  border-bottom-right-radius: 27px !important;
}

.lt-rounded-27 {
  border-top-left-radius: 27px !important;
}

.rt-rounded-27 {
  border-top-right-radius: 27px !important;
}

.mt-27 {
  margin-top: 27px !important;
}

.mb-27 {
  margin-bottom: 27px !important;
}

.mr-27 {
  margin-right: 27px !important;
}

.ml-27 {
  margin-left: 27px !important;
}

.mx-27 {
  margin-left: 27px !important;
  margin-right: 27px !important;
}

.my-27 {
  margin-top: 27px !important;
  margin-bottom: 27px !important;
}

.pt-27 {
  padding-top: 27px !important;
}

.pb-27 {
  padding-bottom: 27px !important;
}

.pr-27 {
  padding-right: 27px !important;
}

.pl-27 {
  padding-left: 27px !important;
}

.px-27 {
  padding-left: 27px !important;
  padding-right: 27px !important;
}

.py-27 {
  padding-top: 27px !important;
  padding-bottom: 27px !important;
}

.p-27 {
  padding: 27px !important;
}

.m-27 {
  margin: 27px !important;
}

.w-27 {
  width: 27%!important;
}

.lb-rounded-28 {
  border-bottom-left-radius: 28px !important;
}

.minh-28 {
  min-height: 28px !important;
}

.rb-rounded-28 {
  border-bottom-right-radius: 28px !important;
}

.lt-rounded-28 {
  border-top-left-radius: 28px !important;
}

.rt-rounded-28 {
  border-top-right-radius: 28px !important;
}

.mt-28 {
  margin-top: 28px !important;
}

.mb-28 {
  margin-bottom: 28px !important;
}

.mr-28 {
  margin-right: 28px !important;
}

.ml-28 {
  margin-left: 28px !important;
}

.mx-28 {
  margin-left: 28px !important;
  margin-right: 28px !important;
}

.my-28 {
  margin-top: 28px !important;
  margin-bottom: 28px !important;
}

.pt-28 {
  padding-top: 28px !important;
}

.pb-28 {
  padding-bottom: 28px !important;
}

.pr-28 {
  padding-right: 28px !important;
}

.pl-28 {
  padding-left: 28px !important;
}

.px-28 {
  padding-left: 28px !important;
  padding-right: 28px !important;
}

.py-28 {
  padding-top: 28px !important;
  padding-bottom: 28px !important;
}

.p-28 {
  padding: 28px !important;
}

.m-28 {
  margin: 28px !important;
}

.w-28 {
  width: 28%!important;
}

.lb-rounded-29 {
  border-bottom-left-radius: 29px !important;
}

.minh-29 {
  min-height: 29px !important;
}

.rb-rounded-29 {
  border-bottom-right-radius: 29px !important;
}

.lt-rounded-29 {
  border-top-left-radius: 29px !important;
}

.rt-rounded-29 {
  border-top-right-radius: 29px !important;
}

.mt-29 {
  margin-top: 29px !important;
}

.mb-29 {
  margin-bottom: 29px !important;
}

.mr-29 {
  margin-right: 29px !important;
}

.ml-29 {
  margin-left: 29px !important;
}

.mx-29 {
  margin-left: 29px !important;
  margin-right: 29px !important;
}

.my-29 {
  margin-top: 29px !important;
  margin-bottom: 29px !important;
}

.pt-29 {
  padding-top: 29px !important;
}

.pb-29 {
  padding-bottom: 29px !important;
}

.pr-29 {
  padding-right: 29px !important;
}

.pl-29 {
  padding-left: 29px !important;
}

.px-29 {
  padding-left: 29px !important;
  padding-right: 29px !important;
}

.py-29 {
  padding-top: 29px !important;
  padding-bottom: 29px !important;
}

.p-29 {
  padding: 29px !important;
}

.m-29 {
  margin: 29px !important;
}

.w-29 {
  width: 29%!important;
}

.lb-rounded-30 {
  border-bottom-left-radius: 30px !important;
}

.minh-30 {
  min-height: 30px !important;
}

.rb-rounded-30 {
  border-bottom-right-radius: 30px !important;
}

.lt-rounded-30 {
  border-top-left-radius: 30px !important;
}

.rt-rounded-30 {
  border-top-right-radius: 30px !important;
}

.mt-30 {
  margin-top: 30px !important;
}

.mb-30 {
  margin-bottom: 30px !important;
}

.mr-30 {
  margin-right: 30px !important;
}

.ml-30 {
  margin-left: 30px !important;
}

.mx-30 {
  margin-left: 30px !important;
  margin-right: 30px !important;
}

.my-30 {
  margin-top: 30px !important;
  margin-bottom: 30px !important;
}

.pt-30 {
  padding-top: 30px !important;
}

.pb-30 {
  padding-bottom: 30px !important;
}

.pr-30 {
  padding-right: 30px !important;
}

.pl-30 {
  padding-left: 30px !important;
}

.px-30 {
  padding-left: 30px !important;
  padding-right: 30px !important;
}

.py-30 {
  padding-top: 30px !important;
  padding-bottom: 30px !important;
}

.p-30 {
  padding: 30px !important;
}

.m-30 {
  margin: 30px !important;
}

.w-30 {
  width: 30%!important;
}

.lb-rounded-31 {
  border-bottom-left-radius: 31px !important;
}

.minh-31 {
  min-height: 31px !important;
}

.rb-rounded-31 {
  border-bottom-right-radius: 31px !important;
}

.lt-rounded-31 {
  border-top-left-radius: 31px !important;
}

.rt-rounded-31 {
  border-top-right-radius: 31px !important;
}

.mt-31 {
  margin-top: 31px !important;
}

.mb-31 {
  margin-bottom: 31px !important;
}

.mr-31 {
  margin-right: 31px !important;
}

.ml-31 {
  margin-left: 31px !important;
}

.mx-31 {
  margin-left: 31px !important;
  margin-right: 31px !important;
}

.my-31 {
  margin-top: 31px !important;
  margin-bottom: 31px !important;
}

.pt-31 {
  padding-top: 31px !important;
}

.pb-31 {
  padding-bottom: 31px !important;
}

.pr-31 {
  padding-right: 31px !important;
}

.pl-31 {
  padding-left: 31px !important;
}

.px-31 {
  padding-left: 31px !important;
  padding-right: 31px !important;
}

.py-31 {
  padding-top: 31px !important;
  padding-bottom: 31px !important;
}

.p-31 {
  padding: 31px !important;
}

.m-31 {
  margin: 31px !important;
}

.w-31 {
  width: 31%!important;
}

.lb-rounded-32 {
  border-bottom-left-radius: 32px !important;
}

.minh-32 {
  min-height: 32px !important;
}

.rb-rounded-32 {
  border-bottom-right-radius: 32px !important;
}

.lt-rounded-32 {
  border-top-left-radius: 32px !important;
}

.rt-rounded-32 {
  border-top-right-radius: 32px !important;
}

.mt-32 {
  margin-top: 32px !important;
}

.mb-32 {
  margin-bottom: 32px !important;
}

.mr-32 {
  margin-right: 32px !important;
}

.ml-32 {
  margin-left: 32px !important;
}

.mx-32 {
  margin-left: 32px !important;
  margin-right: 32px !important;
}

.my-32 {
  margin-top: 32px !important;
  margin-bottom: 32px !important;
}

.pt-32 {
  padding-top: 32px !important;
}

.pb-32 {
  padding-bottom: 32px !important;
}

.pr-32 {
  padding-right: 32px !important;
}

.pl-32 {
  padding-left: 32px !important;
}

.px-32 {
  padding-left: 32px !important;
  padding-right: 32px !important;
}

.py-32 {
  padding-top: 32px !important;
  padding-bottom: 32px !important;
}

.p-32 {
  padding: 32px !important;
}

.m-32 {
  margin: 32px !important;
}

.w-32 {
  width: 32%!important;
}

.lb-rounded-33 {
  border-bottom-left-radius: 33px !important;
}

.minh-33 {
  min-height: 33px !important;
}

.rb-rounded-33 {
  border-bottom-right-radius: 33px !important;
}

.lt-rounded-33 {
  border-top-left-radius: 33px !important;
}

.rt-rounded-33 {
  border-top-right-radius: 33px !important;
}

.mt-33 {
  margin-top: 33px !important;
}

.mb-33 {
  margin-bottom: 33px !important;
}

.mr-33 {
  margin-right: 33px !important;
}

.ml-33 {
  margin-left: 33px !important;
}

.mx-33 {
  margin-left: 33px !important;
  margin-right: 33px !important;
}

.my-33 {
  margin-top: 33px !important;
  margin-bottom: 33px !important;
}

.pt-33 {
  padding-top: 33px !important;
}

.pb-33 {
  padding-bottom: 33px !important;
}

.pr-33 {
  padding-right: 33px !important;
}

.pl-33 {
  padding-left: 33px !important;
}

.px-33 {
  padding-left: 33px !important;
  padding-right: 33px !important;
}

.py-33 {
  padding-top: 33px !important;
  padding-bottom: 33px !important;
}

.p-33 {
  padding: 33px !important;
}

.m-33 {
  margin: 33px !important;
}

.w-33 {
  width: 33%!important;
}

.lb-rounded-34 {
  border-bottom-left-radius: 34px !important;
}

.minh-34 {
  min-height: 34px !important;
}

.rb-rounded-34 {
  border-bottom-right-radius: 34px !important;
}

.lt-rounded-34 {
  border-top-left-radius: 34px !important;
}

.rt-rounded-34 {
  border-top-right-radius: 34px !important;
}

.mt-34 {
  margin-top: 34px !important;
}

.mb-34 {
  margin-bottom: 34px !important;
}

.mr-34 {
  margin-right: 34px !important;
}

.ml-34 {
  margin-left: 34px !important;
}

.mx-34 {
  margin-left: 34px !important;
  margin-right: 34px !important;
}

.my-34 {
  margin-top: 34px !important;
  margin-bottom: 34px !important;
}

.pt-34 {
  padding-top: 34px !important;
}

.pb-34 {
  padding-bottom: 34px !important;
}

.pr-34 {
  padding-right: 34px !important;
}

.pl-34 {
  padding-left: 34px !important;
}

.px-34 {
  padding-left: 34px !important;
  padding-right: 34px !important;
}

.py-34 {
  padding-top: 34px !important;
  padding-bottom: 34px !important;
}

.p-34 {
  padding: 34px !important;
}

.m-34 {
  margin: 34px !important;
}

.w-34 {
  width: 34%!important;
}

.lb-rounded-35 {
  border-bottom-left-radius: 35px !important;
}

.minh-35 {
  min-height: 35px !important;
}

.rb-rounded-35 {
  border-bottom-right-radius: 35px !important;
}

.lt-rounded-35 {
  border-top-left-radius: 35px !important;
}

.rt-rounded-35 {
  border-top-right-radius: 35px !important;
}

.mt-35 {
  margin-top: 35px !important;
}

.mb-35 {
  margin-bottom: 35px !important;
}

.mr-35 {
  margin-right: 35px !important;
}

.ml-35 {
  margin-left: 35px !important;
}

.mx-35 {
  margin-left: 35px !important;
  margin-right: 35px !important;
}

.my-35 {
  margin-top: 35px !important;
  margin-bottom: 35px !important;
}

.pt-35 {
  padding-top: 35px !important;
}

.pb-35 {
  padding-bottom: 35px !important;
}

.pr-35 {
  padding-right: 35px !important;
}

.pl-35 {
  padding-left: 35px !important;
}

.px-35 {
  padding-left: 35px !important;
  padding-right: 35px !important;
}

.py-35 {
  padding-top: 35px !important;
  padding-bottom: 35px !important;
}

.p-35 {
  padding: 35px !important;
}

.m-35 {
  margin: 35px !important;
}

.w-35 {
  width: 35%!important;
}

.lb-rounded-36 {
  border-bottom-left-radius: 36px !important;
}

.minh-36 {
  min-height: 36px !important;
}

.rb-rounded-36 {
  border-bottom-right-radius: 36px !important;
}

.lt-rounded-36 {
  border-top-left-radius: 36px !important;
}

.rt-rounded-36 {
  border-top-right-radius: 36px !important;
}

.mt-36 {
  margin-top: 36px !important;
}

.mb-36 {
  margin-bottom: 36px !important;
}

.mr-36 {
  margin-right: 36px !important;
}

.ml-36 {
  margin-left: 36px !important;
}

.mx-36 {
  margin-left: 36px !important;
  margin-right: 36px !important;
}

.my-36 {
  margin-top: 36px !important;
  margin-bottom: 36px !important;
}

.pt-36 {
  padding-top: 36px !important;
}

.pb-36 {
  padding-bottom: 36px !important;
}

.pr-36 {
  padding-right: 36px !important;
}

.pl-36 {
  padding-left: 36px !important;
}

.px-36 {
  padding-left: 36px !important;
  padding-right: 36px !important;
}

.py-36 {
  padding-top: 36px !important;
  padding-bottom: 36px !important;
}

.p-36 {
  padding: 36px !important;
}

.m-36 {
  margin: 36px !important;
}

.w-36 {
  width: 36%!important;
}

.lb-rounded-37 {
  border-bottom-left-radius: 37px !important;
}

.minh-37 {
  min-height: 37px !important;
}

.rb-rounded-37 {
  border-bottom-right-radius: 37px !important;
}

.lt-rounded-37 {
  border-top-left-radius: 37px !important;
}

.rt-rounded-37 {
  border-top-right-radius: 37px !important;
}

.mt-37 {
  margin-top: 37px !important;
}

.mb-37 {
  margin-bottom: 37px !important;
}

.mr-37 {
  margin-right: 37px !important;
}

.ml-37 {
  margin-left: 37px !important;
}

.mx-37 {
  margin-left: 37px !important;
  margin-right: 37px !important;
}

.my-37 {
  margin-top: 37px !important;
  margin-bottom: 37px !important;
}

.pt-37 {
  padding-top: 37px !important;
}

.pb-37 {
  padding-bottom: 37px !important;
}

.pr-37 {
  padding-right: 37px !important;
}

.pl-37 {
  padding-left: 37px !important;
}

.px-37 {
  padding-left: 37px !important;
  padding-right: 37px !important;
}

.py-37 {
  padding-top: 37px !important;
  padding-bottom: 37px !important;
}

.p-37 {
  padding: 37px !important;
}

.m-37 {
  margin: 37px !important;
}

.w-37 {
  width: 37%!important;
}

.lb-rounded-38 {
  border-bottom-left-radius: 38px !important;
}

.minh-38 {
  min-height: 38px !important;
}

.rb-rounded-38 {
  border-bottom-right-radius: 38px !important;
}

.lt-rounded-38 {
  border-top-left-radius: 38px !important;
}

.rt-rounded-38 {
  border-top-right-radius: 38px !important;
}

.mt-38 {
  margin-top: 38px !important;
}

.mb-38 {
  margin-bottom: 38px !important;
}

.mr-38 {
  margin-right: 38px !important;
}

.ml-38 {
  margin-left: 38px !important;
}

.mx-38 {
  margin-left: 38px !important;
  margin-right: 38px !important;
}

.my-38 {
  margin-top: 38px !important;
  margin-bottom: 38px !important;
}

.pt-38 {
  padding-top: 38px !important;
}

.pb-38 {
  padding-bottom: 38px !important;
}

.pr-38 {
  padding-right: 38px !important;
}

.pl-38 {
  padding-left: 38px !important;
}

.px-38 {
  padding-left: 38px !important;
  padding-right: 38px !important;
}

.py-38 {
  padding-top: 38px !important;
  padding-bottom: 38px !important;
}

.p-38 {
  padding: 38px !important;
}

.m-38 {
  margin: 38px !important;
}

.w-38 {
  width: 38%!important;
}

.lb-rounded-39 {
  border-bottom-left-radius: 39px !important;
}

.minh-39 {
  min-height: 39px !important;
}

.rb-rounded-39 {
  border-bottom-right-radius: 39px !important;
}

.lt-rounded-39 {
  border-top-left-radius: 39px !important;
}

.rt-rounded-39 {
  border-top-right-radius: 39px !important;
}

.mt-39 {
  margin-top: 39px !important;
}

.mb-39 {
  margin-bottom: 39px !important;
}

.mr-39 {
  margin-right: 39px !important;
}

.ml-39 {
  margin-left: 39px !important;
}

.mx-39 {
  margin-left: 39px !important;
  margin-right: 39px !important;
}

.my-39 {
  margin-top: 39px !important;
  margin-bottom: 39px !important;
}

.pt-39 {
  padding-top: 39px !important;
}

.pb-39 {
  padding-bottom: 39px !important;
}

.pr-39 {
  padding-right: 39px !important;
}

.pl-39 {
  padding-left: 39px !important;
}

.px-39 {
  padding-left: 39px !important;
  padding-right: 39px !important;
}

.py-39 {
  padding-top: 39px !important;
  padding-bottom: 39px !important;
}

.p-39 {
  padding: 39px !important;
}

.m-39 {
  margin: 39px !important;
}

.w-39 {
  width: 39%!important;
}

.lb-rounded-40 {
  border-bottom-left-radius: 40px !important;
}

.minh-40 {
  min-height: 40px !important;
}

.rb-rounded-40 {
  border-bottom-right-radius: 40px !important;
}

.lt-rounded-40 {
  border-top-left-radius: 40px !important;
}

.rt-rounded-40 {
  border-top-right-radius: 40px !important;
}

.mt-40 {
  margin-top: 40px !important;
}

.mb-40 {
  margin-bottom: 40px !important;
}

.mr-40 {
  margin-right: 40px !important;
}

.ml-40 {
  margin-left: 40px !important;
}

.mx-40 {
  margin-left: 40px !important;
  margin-right: 40px !important;
}

.my-40 {
  margin-top: 40px !important;
  margin-bottom: 40px !important;
}

.pt-40 {
  padding-top: 40px !important;
}

.pb-40 {
  padding-bottom: 40px !important;
}

.pr-40 {
  padding-right: 40px !important;
}

.pl-40 {
  padding-left: 40px !important;
}

.px-40 {
  padding-left: 40px !important;
  padding-right: 40px !important;
}

.py-40 {
  padding-top: 40px !important;
  padding-bottom: 40px !important;
}

.p-40 {
  padding: 40px !important;
}

.m-40 {
  margin: 40px !important;
}

.w-40 {
  width: 40%!important;
}

.lb-rounded-41 {
  border-bottom-left-radius: 41px !important;
}

.minh-41 {
  min-height: 41px !important;
}

.rb-rounded-41 {
  border-bottom-right-radius: 41px !important;
}

.lt-rounded-41 {
  border-top-left-radius: 41px !important;
}

.rt-rounded-41 {
  border-top-right-radius: 41px !important;
}

.mt-41 {
  margin-top: 41px !important;
}

.mb-41 {
  margin-bottom: 41px !important;
}

.mr-41 {
  margin-right: 41px !important;
}

.ml-41 {
  margin-left: 41px !important;
}

.mx-41 {
  margin-left: 41px !important;
  margin-right: 41px !important;
}

.my-41 {
  margin-top: 41px !important;
  margin-bottom: 41px !important;
}

.pt-41 {
  padding-top: 41px !important;
}

.pb-41 {
  padding-bottom: 41px !important;
}

.pr-41 {
  padding-right: 41px !important;
}

.pl-41 {
  padding-left: 41px !important;
}

.px-41 {
  padding-left: 41px !important;
  padding-right: 41px !important;
}

.py-41 {
  padding-top: 41px !important;
  padding-bottom: 41px !important;
}

.p-41 {
  padding: 41px !important;
}

.m-41 {
  margin: 41px !important;
}

.w-41 {
  width: 41%!important;
}

.lb-rounded-42 {
  border-bottom-left-radius: 42px !important;
}

.minh-42 {
  min-height: 42px !important;
}

.rb-rounded-42 {
  border-bottom-right-radius: 42px !important;
}

.lt-rounded-42 {
  border-top-left-radius: 42px !important;
}

.rt-rounded-42 {
  border-top-right-radius: 42px !important;
}

.mt-42 {
  margin-top: 42px !important;
}

.mb-42 {
  margin-bottom: 42px !important;
}

.mr-42 {
  margin-right: 42px !important;
}

.ml-42 {
  margin-left: 42px !important;
}

.mx-42 {
  margin-left: 42px !important;
  margin-right: 42px !important;
}

.my-42 {
  margin-top: 42px !important;
  margin-bottom: 42px !important;
}

.pt-42 {
  padding-top: 42px !important;
}

.pb-42 {
  padding-bottom: 42px !important;
}

.pr-42 {
  padding-right: 42px !important;
}

.pl-42 {
  padding-left: 42px !important;
}

.px-42 {
  padding-left: 42px !important;
  padding-right: 42px !important;
}

.py-42 {
  padding-top: 42px !important;
  padding-bottom: 42px !important;
}

.p-42 {
  padding: 42px !important;
}

.m-42 {
  margin: 42px !important;
}

.w-42 {
  width: 42%!important;
}

.lb-rounded-43 {
  border-bottom-left-radius: 43px !important;
}

.minh-43 {
  min-height: 43px !important;
}

.rb-rounded-43 {
  border-bottom-right-radius: 43px !important;
}

.lt-rounded-43 {
  border-top-left-radius: 43px !important;
}

.rt-rounded-43 {
  border-top-right-radius: 43px !important;
}

.mt-43 {
  margin-top: 43px !important;
}

.mb-43 {
  margin-bottom: 43px !important;
}

.mr-43 {
  margin-right: 43px !important;
}

.ml-43 {
  margin-left: 43px !important;
}

.mx-43 {
  margin-left: 43px !important;
  margin-right: 43px !important;
}

.my-43 {
  margin-top: 43px !important;
  margin-bottom: 43px !important;
}

.pt-43 {
  padding-top: 43px !important;
}

.pb-43 {
  padding-bottom: 43px !important;
}

.pr-43 {
  padding-right: 43px !important;
}

.pl-43 {
  padding-left: 43px !important;
}

.px-43 {
  padding-left: 43px !important;
  padding-right: 43px !important;
}

.py-43 {
  padding-top: 43px !important;
  padding-bottom: 43px !important;
}

.p-43 {
  padding: 43px !important;
}

.m-43 {
  margin: 43px !important;
}

.w-43 {
  width: 43%!important;
}

.lb-rounded-44 {
  border-bottom-left-radius: 44px !important;
}

.minh-44 {
  min-height: 44px !important;
}

.rb-rounded-44 {
  border-bottom-right-radius: 44px !important;
}

.lt-rounded-44 {
  border-top-left-radius: 44px !important;
}

.rt-rounded-44 {
  border-top-right-radius: 44px !important;
}

.mt-44 {
  margin-top: 44px !important;
}

.mb-44 {
  margin-bottom: 44px !important;
}

.mr-44 {
  margin-right: 44px !important;
}

.ml-44 {
  margin-left: 44px !important;
}

.mx-44 {
  margin-left: 44px !important;
  margin-right: 44px !important;
}

.my-44 {
  margin-top: 44px !important;
  margin-bottom: 44px !important;
}

.pt-44 {
  padding-top: 44px !important;
}

.pb-44 {
  padding-bottom: 44px !important;
}

.pr-44 {
  padding-right: 44px !important;
}

.pl-44 {
  padding-left: 44px !important;
}

.px-44 {
  padding-left: 44px !important;
  padding-right: 44px !important;
}

.py-44 {
  padding-top: 44px !important;
  padding-bottom: 44px !important;
}

.p-44 {
  padding: 44px !important;
}

.m-44 {
  margin: 44px !important;
}

.w-44 {
  width: 44%!important;
}

.lb-rounded-45 {
  border-bottom-left-radius: 45px !important;
}

.minh-45 {
  min-height: 45px !important;
}

.rb-rounded-45 {
  border-bottom-right-radius: 45px !important;
}

.lt-rounded-45 {
  border-top-left-radius: 45px !important;
}

.rt-rounded-45 {
  border-top-right-radius: 45px !important;
}

.mt-45 {
  margin-top: 45px !important;
}

.mb-45 {
  margin-bottom: 45px !important;
}

.mr-45 {
  margin-right: 45px !important;
}

.ml-45 {
  margin-left: 45px !important;
}

.mx-45 {
  margin-left: 45px !important;
  margin-right: 45px !important;
}

.my-45 {
  margin-top: 45px !important;
  margin-bottom: 45px !important;
}

.pt-45 {
  padding-top: 45px !important;
}

.pb-45 {
  padding-bottom: 45px !important;
}

.pr-45 {
  padding-right: 45px !important;
}

.pl-45 {
  padding-left: 45px !important;
}

.px-45 {
  padding-left: 45px !important;
  padding-right: 45px !important;
}

.py-45 {
  padding-top: 45px !important;
  padding-bottom: 45px !important;
}

.p-45 {
  padding: 45px !important;
}

.m-45 {
  margin: 45px !important;
}

.w-45 {
  width: 45%!important;
}

.lb-rounded-46 {
  border-bottom-left-radius: 46px !important;
}

.minh-46 {
  min-height: 46px !important;
}

.rb-rounded-46 {
  border-bottom-right-radius: 46px !important;
}

.lt-rounded-46 {
  border-top-left-radius: 46px !important;
}

.rt-rounded-46 {
  border-top-right-radius: 46px !important;
}

.mt-46 {
  margin-top: 46px !important;
}

.mb-46 {
  margin-bottom: 46px !important;
}

.mr-46 {
  margin-right: 46px !important;
}

.ml-46 {
  margin-left: 46px !important;
}

.mx-46 {
  margin-left: 46px !important;
  margin-right: 46px !important;
}

.my-46 {
  margin-top: 46px !important;
  margin-bottom: 46px !important;
}

.pt-46 {
  padding-top: 46px !important;
}

.pb-46 {
  padding-bottom: 46px !important;
}

.pr-46 {
  padding-right: 46px !important;
}

.pl-46 {
  padding-left: 46px !important;
}

.px-46 {
  padding-left: 46px !important;
  padding-right: 46px !important;
}

.py-46 {
  padding-top: 46px !important;
  padding-bottom: 46px !important;
}

.p-46 {
  padding: 46px !important;
}

.m-46 {
  margin: 46px !important;
}

.w-46 {
  width: 46%!important;
}

.lb-rounded-47 {
  border-bottom-left-radius: 47px !important;
}

.minh-47 {
  min-height: 47px !important;
}

.rb-rounded-47 {
  border-bottom-right-radius: 47px !important;
}

.lt-rounded-47 {
  border-top-left-radius: 47px !important;
}

.rt-rounded-47 {
  border-top-right-radius: 47px !important;
}

.mt-47 {
  margin-top: 47px !important;
}

.mb-47 {
  margin-bottom: 47px !important;
}

.mr-47 {
  margin-right: 47px !important;
}

.ml-47 {
  margin-left: 47px !important;
}

.mx-47 {
  margin-left: 47px !important;
  margin-right: 47px !important;
}

.my-47 {
  margin-top: 47px !important;
  margin-bottom: 47px !important;
}

.pt-47 {
  padding-top: 47px !important;
}

.pb-47 {
  padding-bottom: 47px !important;
}

.pr-47 {
  padding-right: 47px !important;
}

.pl-47 {
  padding-left: 47px !important;
}

.px-47 {
  padding-left: 47px !important;
  padding-right: 47px !important;
}

.py-47 {
  padding-top: 47px !important;
  padding-bottom: 47px !important;
}

.p-47 {
  padding: 47px !important;
}

.m-47 {
  margin: 47px !important;
}

.w-47 {
  width: 47%!important;
}

.lb-rounded-48 {
  border-bottom-left-radius: 48px !important;
}

.minh-48 {
  min-height: 48px !important;
}

.rb-rounded-48 {
  border-bottom-right-radius: 48px !important;
}

.lt-rounded-48 {
  border-top-left-radius: 48px !important;
}

.rt-rounded-48 {
  border-top-right-radius: 48px !important;
}

.mt-48 {
  margin-top: 48px !important;
}

.mb-48 {
  margin-bottom: 48px !important;
}

.mr-48 {
  margin-right: 48px !important;
}

.ml-48 {
  margin-left: 48px !important;
}

.mx-48 {
  margin-left: 48px !important;
  margin-right: 48px !important;
}

.my-48 {
  margin-top: 48px !important;
  margin-bottom: 48px !important;
}

.pt-48 {
  padding-top: 48px !important;
}

.pb-48 {
  padding-bottom: 48px !important;
}

.pr-48 {
  padding-right: 48px !important;
}

.pl-48 {
  padding-left: 48px !important;
}

.px-48 {
  padding-left: 48px !important;
  padding-right: 48px !important;
}

.py-48 {
  padding-top: 48px !important;
  padding-bottom: 48px !important;
}

.p-48 {
  padding: 48px !important;
}

.m-48 {
  margin: 48px !important;
}

.w-48 {
  width: 48%!important;
}

.lb-rounded-49 {
  border-bottom-left-radius: 49px !important;
}

.minh-49 {
  min-height: 49px !important;
}

.rb-rounded-49 {
  border-bottom-right-radius: 49px !important;
}

.lt-rounded-49 {
  border-top-left-radius: 49px !important;
}

.rt-rounded-49 {
  border-top-right-radius: 49px !important;
}

.mt-49 {
  margin-top: 49px !important;
}

.mb-49 {
  margin-bottom: 49px !important;
}

.mr-49 {
  margin-right: 49px !important;
}

.ml-49 {
  margin-left: 49px !important;
}

.mx-49 {
  margin-left: 49px !important;
  margin-right: 49px !important;
}

.my-49 {
  margin-top: 49px !important;
  margin-bottom: 49px !important;
}

.pt-49 {
  padding-top: 49px !important;
}

.pb-49 {
  padding-bottom: 49px !important;
}

.pr-49 {
  padding-right: 49px !important;
}

.pl-49 {
  padding-left: 49px !important;
}

.px-49 {
  padding-left: 49px !important;
  padding-right: 49px !important;
}

.py-49 {
  padding-top: 49px !important;
  padding-bottom: 49px !important;
}

.p-49 {
  padding: 49px !important;
}

.m-49 {
  margin: 49px !important;
}

.w-49 {
  width: 49%!important;
}

.lb-rounded-50 {
  border-bottom-left-radius: 50px !important;
}

.minh-50 {
  min-height: 50px !important;
}

.rb-rounded-50 {
  border-bottom-right-radius: 50px !important;
}

.lt-rounded-50 {
  border-top-left-radius: 50px !important;
}

.rt-rounded-50 {
  border-top-right-radius: 50px !important;
}

.mt-50 {
  margin-top: 50px !important;
}

.mb-50 {
  margin-bottom: 50px !important;
}

.mr-50 {
  margin-right: 50px !important;
}

.ml-50 {
  margin-left: 50px !important;
}

.mx-50 {
  margin-left: 50px !important;
  margin-right: 50px !important;
}

.my-50 {
  margin-top: 50px !important;
  margin-bottom: 50px !important;
}

.pt-50 {
  padding-top: 50px !important;
}

.pb-50 {
  padding-bottom: 50px !important;
}

.pr-50 {
  padding-right: 50px !important;
}

.pl-50 {
  padding-left: 50px !important;
}

.px-50 {
  padding-left: 50px !important;
  padding-right: 50px !important;
}

.py-50 {
  padding-top: 50px !important;
  padding-bottom: 50px !important;
}

.p-50 {
  padding: 50px !important;
}

.m-50 {
  margin: 50px !important;
}

.w-50 {
  width: 50%!important;
}

.lb-rounded-51 {
  border-bottom-left-radius: 51px !important;
}

.minh-51 {
  min-height: 51px !important;
}

.rb-rounded-51 {
  border-bottom-right-radius: 51px !important;
}

.lt-rounded-51 {
  border-top-left-radius: 51px !important;
}

.rt-rounded-51 {
  border-top-right-radius: 51px !important;
}

.mt-51 {
  margin-top: 51px !important;
}

.mb-51 {
  margin-bottom: 51px !important;
}

.mr-51 {
  margin-right: 51px !important;
}

.ml-51 {
  margin-left: 51px !important;
}

.mx-51 {
  margin-left: 51px !important;
  margin-right: 51px !important;
}

.my-51 {
  margin-top: 51px !important;
  margin-bottom: 51px !important;
}

.pt-51 {
  padding-top: 51px !important;
}

.pb-51 {
  padding-bottom: 51px !important;
}

.pr-51 {
  padding-right: 51px !important;
}

.pl-51 {
  padding-left: 51px !important;
}

.px-51 {
  padding-left: 51px !important;
  padding-right: 51px !important;
}

.py-51 {
  padding-top: 51px !important;
  padding-bottom: 51px !important;
}

.p-51 {
  padding: 51px !important;
}

.m-51 {
  margin: 51px !important;
}

.w-51 {
  width: 51%!important;
}

.lb-rounded-52 {
  border-bottom-left-radius: 52px !important;
}

.minh-52 {
  min-height: 52px !important;
}

.rb-rounded-52 {
  border-bottom-right-radius: 52px !important;
}

.lt-rounded-52 {
  border-top-left-radius: 52px !important;
}

.rt-rounded-52 {
  border-top-right-radius: 52px !important;
}

.mt-52 {
  margin-top: 52px !important;
}

.mb-52 {
  margin-bottom: 52px !important;
}

.mr-52 {
  margin-right: 52px !important;
}

.ml-52 {
  margin-left: 52px !important;
}

.mx-52 {
  margin-left: 52px !important;
  margin-right: 52px !important;
}

.my-52 {
  margin-top: 52px !important;
  margin-bottom: 52px !important;
}

.pt-52 {
  padding-top: 52px !important;
}

.pb-52 {
  padding-bottom: 52px !important;
}

.pr-52 {
  padding-right: 52px !important;
}

.pl-52 {
  padding-left: 52px !important;
}

.px-52 {
  padding-left: 52px !important;
  padding-right: 52px !important;
}

.py-52 {
  padding-top: 52px !important;
  padding-bottom: 52px !important;
}

.p-52 {
  padding: 52px !important;
}

.m-52 {
  margin: 52px !important;
}

.w-52 {
  width: 52%!important;
}

.lb-rounded-53 {
  border-bottom-left-radius: 53px !important;
}

.minh-53 {
  min-height: 53px !important;
}

.rb-rounded-53 {
  border-bottom-right-radius: 53px !important;
}

.lt-rounded-53 {
  border-top-left-radius: 53px !important;
}

.rt-rounded-53 {
  border-top-right-radius: 53px !important;
}

.mt-53 {
  margin-top: 53px !important;
}

.mb-53 {
  margin-bottom: 53px !important;
}

.mr-53 {
  margin-right: 53px !important;
}

.ml-53 {
  margin-left: 53px !important;
}

.mx-53 {
  margin-left: 53px !important;
  margin-right: 53px !important;
}

.my-53 {
  margin-top: 53px !important;
  margin-bottom: 53px !important;
}

.pt-53 {
  padding-top: 53px !important;
}

.pb-53 {
  padding-bottom: 53px !important;
}

.pr-53 {
  padding-right: 53px !important;
}

.pl-53 {
  padding-left: 53px !important;
}

.px-53 {
  padding-left: 53px !important;
  padding-right: 53px !important;
}

.py-53 {
  padding-top: 53px !important;
  padding-bottom: 53px !important;
}

.p-53 {
  padding: 53px !important;
}

.m-53 {
  margin: 53px !important;
}

.w-53 {
  width: 53%!important;
}

.lb-rounded-54 {
  border-bottom-left-radius: 54px !important;
}

.minh-54 {
  min-height: 54px !important;
}

.rb-rounded-54 {
  border-bottom-right-radius: 54px !important;
}

.lt-rounded-54 {
  border-top-left-radius: 54px !important;
}

.rt-rounded-54 {
  border-top-right-radius: 54px !important;
}

.mt-54 {
  margin-top: 54px !important;
}

.mb-54 {
  margin-bottom: 54px !important;
}

.mr-54 {
  margin-right: 54px !important;
}

.ml-54 {
  margin-left: 54px !important;
}

.mx-54 {
  margin-left: 54px !important;
  margin-right: 54px !important;
}

.my-54 {
  margin-top: 54px !important;
  margin-bottom: 54px !important;
}

.pt-54 {
  padding-top: 54px !important;
}

.pb-54 {
  padding-bottom: 54px !important;
}

.pr-54 {
  padding-right: 54px !important;
}

.pl-54 {
  padding-left: 54px !important;
}

.px-54 {
  padding-left: 54px !important;
  padding-right: 54px !important;
}

.py-54 {
  padding-top: 54px !important;
  padding-bottom: 54px !important;
}

.p-54 {
  padding: 54px !important;
}

.m-54 {
  margin: 54px !important;
}

.w-54 {
  width: 54%!important;
}

.lb-rounded-55 {
  border-bottom-left-radius: 55px !important;
}

.minh-55 {
  min-height: 55px !important;
}

.rb-rounded-55 {
  border-bottom-right-radius: 55px !important;
}

.lt-rounded-55 {
  border-top-left-radius: 55px !important;
}

.rt-rounded-55 {
  border-top-right-radius: 55px !important;
}

.mt-55 {
  margin-top: 55px !important;
}

.mb-55 {
  margin-bottom: 55px !important;
}

.mr-55 {
  margin-right: 55px !important;
}

.ml-55 {
  margin-left: 55px !important;
}

.mx-55 {
  margin-left: 55px !important;
  margin-right: 55px !important;
}

.my-55 {
  margin-top: 55px !important;
  margin-bottom: 55px !important;
}

.pt-55 {
  padding-top: 55px !important;
}

.pb-55 {
  padding-bottom: 55px !important;
}

.pr-55 {
  padding-right: 55px !important;
}

.pl-55 {
  padding-left: 55px !important;
}

.px-55 {
  padding-left: 55px !important;
  padding-right: 55px !important;
}

.py-55 {
  padding-top: 55px !important;
  padding-bottom: 55px !important;
}

.p-55 {
  padding: 55px !important;
}

.m-55 {
  margin: 55px !important;
}

.w-55 {
  width: 55%!important;
}

.lb-rounded-56 {
  border-bottom-left-radius: 56px !important;
}

.minh-56 {
  min-height: 56px !important;
}

.rb-rounded-56 {
  border-bottom-right-radius: 56px !important;
}

.lt-rounded-56 {
  border-top-left-radius: 56px !important;
}

.rt-rounded-56 {
  border-top-right-radius: 56px !important;
}

.mt-56 {
  margin-top: 56px !important;
}

.mb-56 {
  margin-bottom: 56px !important;
}

.mr-56 {
  margin-right: 56px !important;
}

.ml-56 {
  margin-left: 56px !important;
}

.mx-56 {
  margin-left: 56px !important;
  margin-right: 56px !important;
}

.my-56 {
  margin-top: 56px !important;
  margin-bottom: 56px !important;
}

.pt-56 {
  padding-top: 56px !important;
}

.pb-56 {
  padding-bottom: 56px !important;
}

.pr-56 {
  padding-right: 56px !important;
}

.pl-56 {
  padding-left: 56px !important;
}

.px-56 {
  padding-left: 56px !important;
  padding-right: 56px !important;
}

.py-56 {
  padding-top: 56px !important;
  padding-bottom: 56px !important;
}

.p-56 {
  padding: 56px !important;
}

.m-56 {
  margin: 56px !important;
}

.w-56 {
  width: 56%!important;
}

.lb-rounded-57 {
  border-bottom-left-radius: 57px !important;
}

.minh-57 {
  min-height: 57px !important;
}

.rb-rounded-57 {
  border-bottom-right-radius: 57px !important;
}

.lt-rounded-57 {
  border-top-left-radius: 57px !important;
}

.rt-rounded-57 {
  border-top-right-radius: 57px !important;
}

.mt-57 {
  margin-top: 57px !important;
}

.mb-57 {
  margin-bottom: 57px !important;
}

.mr-57 {
  margin-right: 57px !important;
}

.ml-57 {
  margin-left: 57px !important;
}

.mx-57 {
  margin-left: 57px !important;
  margin-right: 57px !important;
}

.my-57 {
  margin-top: 57px !important;
  margin-bottom: 57px !important;
}

.pt-57 {
  padding-top: 57px !important;
}

.pb-57 {
  padding-bottom: 57px !important;
}

.pr-57 {
  padding-right: 57px !important;
}

.pl-57 {
  padding-left: 57px !important;
}

.px-57 {
  padding-left: 57px !important;
  padding-right: 57px !important;
}

.py-57 {
  padding-top: 57px !important;
  padding-bottom: 57px !important;
}

.p-57 {
  padding: 57px !important;
}

.m-57 {
  margin: 57px !important;
}

.w-57 {
  width: 57%!important;
}

.lb-rounded-58 {
  border-bottom-left-radius: 58px !important;
}

.minh-58 {
  min-height: 58px !important;
}

.rb-rounded-58 {
  border-bottom-right-radius: 58px !important;
}

.lt-rounded-58 {
  border-top-left-radius: 58px !important;
}

.rt-rounded-58 {
  border-top-right-radius: 58px !important;
}

.mt-58 {
  margin-top: 58px !important;
}

.mb-58 {
  margin-bottom: 58px !important;
}

.mr-58 {
  margin-right: 58px !important;
}

.ml-58 {
  margin-left: 58px !important;
}

.mx-58 {
  margin-left: 58px !important;
  margin-right: 58px !important;
}

.my-58 {
  margin-top: 58px !important;
  margin-bottom: 58px !important;
}

.pt-58 {
  padding-top: 58px !important;
}

.pb-58 {
  padding-bottom: 58px !important;
}

.pr-58 {
  padding-right: 58px !important;
}

.pl-58 {
  padding-left: 58px !important;
}

.px-58 {
  padding-left: 58px !important;
  padding-right: 58px !important;
}

.py-58 {
  padding-top: 58px !important;
  padding-bottom: 58px !important;
}

.p-58 {
  padding: 58px !important;
}

.m-58 {
  margin: 58px !important;
}

.w-58 {
  width: 58%!important;
}

.lb-rounded-59 {
  border-bottom-left-radius: 59px !important;
}

.minh-59 {
  min-height: 59px !important;
}

.rb-rounded-59 {
  border-bottom-right-radius: 59px !important;
}

.lt-rounded-59 {
  border-top-left-radius: 59px !important;
}

.rt-rounded-59 {
  border-top-right-radius: 59px !important;
}

.mt-59 {
  margin-top: 59px !important;
}

.mb-59 {
  margin-bottom: 59px !important;
}

.mr-59 {
  margin-right: 59px !important;
}

.ml-59 {
  margin-left: 59px !important;
}

.mx-59 {
  margin-left: 59px !important;
  margin-right: 59px !important;
}

.my-59 {
  margin-top: 59px !important;
  margin-bottom: 59px !important;
}

.pt-59 {
  padding-top: 59px !important;
}

.pb-59 {
  padding-bottom: 59px !important;
}

.pr-59 {
  padding-right: 59px !important;
}

.pl-59 {
  padding-left: 59px !important;
}

.px-59 {
  padding-left: 59px !important;
  padding-right: 59px !important;
}

.py-59 {
  padding-top: 59px !important;
  padding-bottom: 59px !important;
}

.p-59 {
  padding: 59px !important;
}

.m-59 {
  margin: 59px !important;
}

.w-59 {
  width: 59%!important;
}

.lb-rounded-60 {
  border-bottom-left-radius: 60px !important;
}

.minh-60 {
  min-height: 60px !important;
}

.rb-rounded-60 {
  border-bottom-right-radius: 60px !important;
}

.lt-rounded-60 {
  border-top-left-radius: 60px !important;
}

.rt-rounded-60 {
  border-top-right-radius: 60px !important;
}

.mt-60 {
  margin-top: 60px !important;
}

.mb-60 {
  margin-bottom: 60px !important;
}

.mr-60 {
  margin-right: 60px !important;
}

.ml-60 {
  margin-left: 60px !important;
}

.mx-60 {
  margin-left: 60px !important;
  margin-right: 60px !important;
}

.my-60 {
  margin-top: 60px !important;
  margin-bottom: 60px !important;
}

.pt-60 {
  padding-top: 60px !important;
}

.pb-60 {
  padding-bottom: 60px !important;
}

.pr-60 {
  padding-right: 60px !important;
}

.pl-60 {
  padding-left: 60px !important;
}

.px-60 {
  padding-left: 60px !important;
  padding-right: 60px !important;
}

.py-60 {
  padding-top: 60px !important;
  padding-bottom: 60px !important;
}

.p-60 {
  padding: 60px !important;
}

.m-60 {
  margin: 60px !important;
}

.w-60 {
  width: 60%!important;
}

.lb-rounded-61 {
  border-bottom-left-radius: 61px !important;
}

.minh-61 {
  min-height: 61px !important;
}

.rb-rounded-61 {
  border-bottom-right-radius: 61px !important;
}

.lt-rounded-61 {
  border-top-left-radius: 61px !important;
}

.rt-rounded-61 {
  border-top-right-radius: 61px !important;
}

.mt-61 {
  margin-top: 61px !important;
}

.mb-61 {
  margin-bottom: 61px !important;
}

.mr-61 {
  margin-right: 61px !important;
}

.ml-61 {
  margin-left: 61px !important;
}

.mx-61 {
  margin-left: 61px !important;
  margin-right: 61px !important;
}

.my-61 {
  margin-top: 61px !important;
  margin-bottom: 61px !important;
}

.pt-61 {
  padding-top: 61px !important;
}

.pb-61 {
  padding-bottom: 61px !important;
}

.pr-61 {
  padding-right: 61px !important;
}

.pl-61 {
  padding-left: 61px !important;
}

.px-61 {
  padding-left: 61px !important;
  padding-right: 61px !important;
}

.py-61 {
  padding-top: 61px !important;
  padding-bottom: 61px !important;
}

.p-61 {
  padding: 61px !important;
}

.m-61 {
  margin: 61px !important;
}

.w-61 {
  width: 61%!important;
}

.lb-rounded-62 {
  border-bottom-left-radius: 62px !important;
}

.minh-62 {
  min-height: 62px !important;
}

.rb-rounded-62 {
  border-bottom-right-radius: 62px !important;
}

.lt-rounded-62 {
  border-top-left-radius: 62px !important;
}

.rt-rounded-62 {
  border-top-right-radius: 62px !important;
}

.mt-62 {
  margin-top: 62px !important;
}

.mb-62 {
  margin-bottom: 62px !important;
}

.mr-62 {
  margin-right: 62px !important;
}

.ml-62 {
  margin-left: 62px !important;
}

.mx-62 {
  margin-left: 62px !important;
  margin-right: 62px !important;
}

.my-62 {
  margin-top: 62px !important;
  margin-bottom: 62px !important;
}

.pt-62 {
  padding-top: 62px !important;
}

.pb-62 {
  padding-bottom: 62px !important;
}

.pr-62 {
  padding-right: 62px !important;
}

.pl-62 {
  padding-left: 62px !important;
}

.px-62 {
  padding-left: 62px !important;
  padding-right: 62px !important;
}

.py-62 {
  padding-top: 62px !important;
  padding-bottom: 62px !important;
}

.p-62 {
  padding: 62px !important;
}

.m-62 {
  margin: 62px !important;
}

.w-62 {
  width: 62%!important;
}

.lb-rounded-63 {
  border-bottom-left-radius: 63px !important;
}

.minh-63 {
  min-height: 63px !important;
}

.rb-rounded-63 {
  border-bottom-right-radius: 63px !important;
}

.lt-rounded-63 {
  border-top-left-radius: 63px !important;
}

.rt-rounded-63 {
  border-top-right-radius: 63px !important;
}

.mt-63 {
  margin-top: 63px !important;
}

.mb-63 {
  margin-bottom: 63px !important;
}

.mr-63 {
  margin-right: 63px !important;
}

.ml-63 {
  margin-left: 63px !important;
}

.mx-63 {
  margin-left: 63px !important;
  margin-right: 63px !important;
}

.my-63 {
  margin-top: 63px !important;
  margin-bottom: 63px !important;
}

.pt-63 {
  padding-top: 63px !important;
}

.pb-63 {
  padding-bottom: 63px !important;
}

.pr-63 {
  padding-right: 63px !important;
}

.pl-63 {
  padding-left: 63px !important;
}

.px-63 {
  padding-left: 63px !important;
  padding-right: 63px !important;
}

.py-63 {
  padding-top: 63px !important;
  padding-bottom: 63px !important;
}

.p-63 {
  padding: 63px !important;
}

.m-63 {
  margin: 63px !important;
}

.w-63 {
  width: 63%!important;
}

.lb-rounded-64 {
  border-bottom-left-radius: 64px !important;
}

.minh-64 {
  min-height: 64px !important;
}

.rb-rounded-64 {
  border-bottom-right-radius: 64px !important;
}

.lt-rounded-64 {
  border-top-left-radius: 64px !important;
}

.rt-rounded-64 {
  border-top-right-radius: 64px !important;
}

.mt-64 {
  margin-top: 64px !important;
}

.mb-64 {
  margin-bottom: 64px !important;
}

.mr-64 {
  margin-right: 64px !important;
}

.ml-64 {
  margin-left: 64px !important;
}

.mx-64 {
  margin-left: 64px !important;
  margin-right: 64px !important;
}

.my-64 {
  margin-top: 64px !important;
  margin-bottom: 64px !important;
}

.pt-64 {
  padding-top: 64px !important;
}

.pb-64 {
  padding-bottom: 64px !important;
}

.pr-64 {
  padding-right: 64px !important;
}

.pl-64 {
  padding-left: 64px !important;
}

.px-64 {
  padding-left: 64px !important;
  padding-right: 64px !important;
}

.py-64 {
  padding-top: 64px !important;
  padding-bottom: 64px !important;
}

.p-64 {
  padding: 64px !important;
}

.m-64 {
  margin: 64px !important;
}

.w-64 {
  width: 64%!important;
}

.lb-rounded-65 {
  border-bottom-left-radius: 65px !important;
}

.minh-65 {
  min-height: 65px !important;
}

.rb-rounded-65 {
  border-bottom-right-radius: 65px !important;
}

.lt-rounded-65 {
  border-top-left-radius: 65px !important;
}

.rt-rounded-65 {
  border-top-right-radius: 65px !important;
}

.mt-65 {
  margin-top: 65px !important;
}

.mb-65 {
  margin-bottom: 65px !important;
}

.mr-65 {
  margin-right: 65px !important;
}

.ml-65 {
  margin-left: 65px !important;
}

.mx-65 {
  margin-left: 65px !important;
  margin-right: 65px !important;
}

.my-65 {
  margin-top: 65px !important;
  margin-bottom: 65px !important;
}

.pt-65 {
  padding-top: 65px !important;
}

.pb-65 {
  padding-bottom: 65px !important;
}

.pr-65 {
  padding-right: 65px !important;
}

.pl-65 {
  padding-left: 65px !important;
}

.px-65 {
  padding-left: 65px !important;
  padding-right: 65px !important;
}

.py-65 {
  padding-top: 65px !important;
  padding-bottom: 65px !important;
}

.p-65 {
  padding: 65px !important;
}

.m-65 {
  margin: 65px !important;
}

.w-65 {
  width: 65%!important;
}

.lb-rounded-66 {
  border-bottom-left-radius: 66px !important;
}

.minh-66 {
  min-height: 66px !important;
}

.rb-rounded-66 {
  border-bottom-right-radius: 66px !important;
}

.lt-rounded-66 {
  border-top-left-radius: 66px !important;
}

.rt-rounded-66 {
  border-top-right-radius: 66px !important;
}

.mt-66 {
  margin-top: 66px !important;
}

.mb-66 {
  margin-bottom: 66px !important;
}

.mr-66 {
  margin-right: 66px !important;
}

.ml-66 {
  margin-left: 66px !important;
}

.mx-66 {
  margin-left: 66px !important;
  margin-right: 66px !important;
}

.my-66 {
  margin-top: 66px !important;
  margin-bottom: 66px !important;
}

.pt-66 {
  padding-top: 66px !important;
}

.pb-66 {
  padding-bottom: 66px !important;
}

.pr-66 {
  padding-right: 66px !important;
}

.pl-66 {
  padding-left: 66px !important;
}

.px-66 {
  padding-left: 66px !important;
  padding-right: 66px !important;
}

.py-66 {
  padding-top: 66px !important;
  padding-bottom: 66px !important;
}

.p-66 {
  padding: 66px !important;
}

.m-66 {
  margin: 66px !important;
}

.w-66 {
  width: 66%!important;
}

.lb-rounded-67 {
  border-bottom-left-radius: 67px !important;
}

.minh-67 {
  min-height: 67px !important;
}

.rb-rounded-67 {
  border-bottom-right-radius: 67px !important;
}

.lt-rounded-67 {
  border-top-left-radius: 67px !important;
}

.rt-rounded-67 {
  border-top-right-radius: 67px !important;
}

.mt-67 {
  margin-top: 67px !important;
}

.mb-67 {
  margin-bottom: 67px !important;
}

.mr-67 {
  margin-right: 67px !important;
}

.ml-67 {
  margin-left: 67px !important;
}

.mx-67 {
  margin-left: 67px !important;
  margin-right: 67px !important;
}

.my-67 {
  margin-top: 67px !important;
  margin-bottom: 67px !important;
}

.pt-67 {
  padding-top: 67px !important;
}

.pb-67 {
  padding-bottom: 67px !important;
}

.pr-67 {
  padding-right: 67px !important;
}

.pl-67 {
  padding-left: 67px !important;
}

.px-67 {
  padding-left: 67px !important;
  padding-right: 67px !important;
}

.py-67 {
  padding-top: 67px !important;
  padding-bottom: 67px !important;
}

.p-67 {
  padding: 67px !important;
}

.m-67 {
  margin: 67px !important;
}

.w-67 {
  width: 67%!important;
}

.lb-rounded-68 {
  border-bottom-left-radius: 68px !important;
}

.minh-68 {
  min-height: 68px !important;
}

.rb-rounded-68 {
  border-bottom-right-radius: 68px !important;
}

.lt-rounded-68 {
  border-top-left-radius: 68px !important;
}

.rt-rounded-68 {
  border-top-right-radius: 68px !important;
}

.mt-68 {
  margin-top: 68px !important;
}

.mb-68 {
  margin-bottom: 68px !important;
}

.mr-68 {
  margin-right: 68px !important;
}

.ml-68 {
  margin-left: 68px !important;
}

.mx-68 {
  margin-left: 68px !important;
  margin-right: 68px !important;
}

.my-68 {
  margin-top: 68px !important;
  margin-bottom: 68px !important;
}

.pt-68 {
  padding-top: 68px !important;
}

.pb-68 {
  padding-bottom: 68px !important;
}

.pr-68 {
  padding-right: 68px !important;
}

.pl-68 {
  padding-left: 68px !important;
}

.px-68 {
  padding-left: 68px !important;
  padding-right: 68px !important;
}

.py-68 {
  padding-top: 68px !important;
  padding-bottom: 68px !important;
}

.p-68 {
  padding: 68px !important;
}

.m-68 {
  margin: 68px !important;
}

.w-68 {
  width: 68%!important;
}

.lb-rounded-69 {
  border-bottom-left-radius: 69px !important;
}

.minh-69 {
  min-height: 69px !important;
}

.rb-rounded-69 {
  border-bottom-right-radius: 69px !important;
}

.lt-rounded-69 {
  border-top-left-radius: 69px !important;
}

.rt-rounded-69 {
  border-top-right-radius: 69px !important;
}

.mt-69 {
  margin-top: 69px !important;
}

.mb-69 {
  margin-bottom: 69px !important;
}

.mr-69 {
  margin-right: 69px !important;
}

.ml-69 {
  margin-left: 69px !important;
}

.mx-69 {
  margin-left: 69px !important;
  margin-right: 69px !important;
}

.my-69 {
  margin-top: 69px !important;
  margin-bottom: 69px !important;
}

.pt-69 {
  padding-top: 69px !important;
}

.pb-69 {
  padding-bottom: 69px !important;
}

.pr-69 {
  padding-right: 69px !important;
}

.pl-69 {
  padding-left: 69px !important;
}

.px-69 {
  padding-left: 69px !important;
  padding-right: 69px !important;
}

.py-69 {
  padding-top: 69px !important;
  padding-bottom: 69px !important;
}

.p-69 {
  padding: 69px !important;
}

.m-69 {
  margin: 69px !important;
}

.w-69 {
  width: 69%!important;
}

.lb-rounded-70 {
  border-bottom-left-radius: 70px !important;
}

.minh-70 {
  min-height: 70px !important;
}

.rb-rounded-70 {
  border-bottom-right-radius: 70px !important;
}

.lt-rounded-70 {
  border-top-left-radius: 70px !important;
}

.rt-rounded-70 {
  border-top-right-radius: 70px !important;
}

.mt-70 {
  margin-top: 70px !important;
}

.mb-70 {
  margin-bottom: 70px !important;
}

.mr-70 {
  margin-right: 70px !important;
}

.ml-70 {
  margin-left: 70px !important;
}

.mx-70 {
  margin-left: 70px !important;
  margin-right: 70px !important;
}

.my-70 {
  margin-top: 70px !important;
  margin-bottom: 70px !important;
}

.pt-70 {
  padding-top: 70px !important;
}

.pb-70 {
  padding-bottom: 70px !important;
}

.pr-70 {
  padding-right: 70px !important;
}

.pl-70 {
  padding-left: 70px !important;
}

.px-70 {
  padding-left: 70px !important;
  padding-right: 70px !important;
}

.py-70 {
  padding-top: 70px !important;
  padding-bottom: 70px !important;
}

.p-70 {
  padding: 70px !important;
}

.m-70 {
  margin: 70px !important;
}

.w-70 {
  width: 70%!important;
}

.lb-rounded-71 {
  border-bottom-left-radius: 71px !important;
}

.minh-71 {
  min-height: 71px !important;
}

.rb-rounded-71 {
  border-bottom-right-radius: 71px !important;
}

.lt-rounded-71 {
  border-top-left-radius: 71px !important;
}

.rt-rounded-71 {
  border-top-right-radius: 71px !important;
}

.mt-71 {
  margin-top: 71px !important;
}

.mb-71 {
  margin-bottom: 71px !important;
}

.mr-71 {
  margin-right: 71px !important;
}

.ml-71 {
  margin-left: 71px !important;
}

.mx-71 {
  margin-left: 71px !important;
  margin-right: 71px !important;
}

.my-71 {
  margin-top: 71px !important;
  margin-bottom: 71px !important;
}

.pt-71 {
  padding-top: 71px !important;
}

.pb-71 {
  padding-bottom: 71px !important;
}

.pr-71 {
  padding-right: 71px !important;
}

.pl-71 {
  padding-left: 71px !important;
}

.px-71 {
  padding-left: 71px !important;
  padding-right: 71px !important;
}

.py-71 {
  padding-top: 71px !important;
  padding-bottom: 71px !important;
}

.p-71 {
  padding: 71px !important;
}

.m-71 {
  margin: 71px !important;
}

.w-71 {
  width: 71%!important;
}

.lb-rounded-72 {
  border-bottom-left-radius: 72px !important;
}

.minh-72 {
  min-height: 72px !important;
}

.rb-rounded-72 {
  border-bottom-right-radius: 72px !important;
}

.lt-rounded-72 {
  border-top-left-radius: 72px !important;
}

.rt-rounded-72 {
  border-top-right-radius: 72px !important;
}

.mt-72 {
  margin-top: 72px !important;
}

.mb-72 {
  margin-bottom: 72px !important;
}

.mr-72 {
  margin-right: 72px !important;
}

.ml-72 {
  margin-left: 72px !important;
}

.mx-72 {
  margin-left: 72px !important;
  margin-right: 72px !important;
}

.my-72 {
  margin-top: 72px !important;
  margin-bottom: 72px !important;
}

.pt-72 {
  padding-top: 72px !important;
}

.pb-72 {
  padding-bottom: 72px !important;
}

.pr-72 {
  padding-right: 72px !important;
}

.pl-72 {
  padding-left: 72px !important;
}

.px-72 {
  padding-left: 72px !important;
  padding-right: 72px !important;
}

.py-72 {
  padding-top: 72px !important;
  padding-bottom: 72px !important;
}

.p-72 {
  padding: 72px !important;
}

.m-72 {
  margin: 72px !important;
}

.w-72 {
  width: 72%!important;
}

.lb-rounded-73 {
  border-bottom-left-radius: 73px !important;
}

.minh-73 {
  min-height: 73px !important;
}

.rb-rounded-73 {
  border-bottom-right-radius: 73px !important;
}

.lt-rounded-73 {
  border-top-left-radius: 73px !important;
}

.rt-rounded-73 {
  border-top-right-radius: 73px !important;
}

.mt-73 {
  margin-top: 73px !important;
}

.mb-73 {
  margin-bottom: 73px !important;
}

.mr-73 {
  margin-right: 73px !important;
}

.ml-73 {
  margin-left: 73px !important;
}

.mx-73 {
  margin-left: 73px !important;
  margin-right: 73px !important;
}

.my-73 {
  margin-top: 73px !important;
  margin-bottom: 73px !important;
}

.pt-73 {
  padding-top: 73px !important;
}

.pb-73 {
  padding-bottom: 73px !important;
}

.pr-73 {
  padding-right: 73px !important;
}

.pl-73 {
  padding-left: 73px !important;
}

.px-73 {
  padding-left: 73px !important;
  padding-right: 73px !important;
}

.py-73 {
  padding-top: 73px !important;
  padding-bottom: 73px !important;
}

.p-73 {
  padding: 73px !important;
}

.m-73 {
  margin: 73px !important;
}

.w-73 {
  width: 73%!important;
}

.lb-rounded-74 {
  border-bottom-left-radius: 74px !important;
}

.minh-74 {
  min-height: 74px !important;
}

.rb-rounded-74 {
  border-bottom-right-radius: 74px !important;
}

.lt-rounded-74 {
  border-top-left-radius: 74px !important;
}

.rt-rounded-74 {
  border-top-right-radius: 74px !important;
}

.mt-74 {
  margin-top: 74px !important;
}

.mb-74 {
  margin-bottom: 74px !important;
}

.mr-74 {
  margin-right: 74px !important;
}

.ml-74 {
  margin-left: 74px !important;
}

.mx-74 {
  margin-left: 74px !important;
  margin-right: 74px !important;
}

.my-74 {
  margin-top: 74px !important;
  margin-bottom: 74px !important;
}

.pt-74 {
  padding-top: 74px !important;
}

.pb-74 {
  padding-bottom: 74px !important;
}

.pr-74 {
  padding-right: 74px !important;
}

.pl-74 {
  padding-left: 74px !important;
}

.px-74 {
  padding-left: 74px !important;
  padding-right: 74px !important;
}

.py-74 {
  padding-top: 74px !important;
  padding-bottom: 74px !important;
}

.p-74 {
  padding: 74px !important;
}

.m-74 {
  margin: 74px !important;
}

.w-74 {
  width: 74%!important;
}

.lb-rounded-75 {
  border-bottom-left-radius: 75px !important;
}

.minh-75 {
  min-height: 75px !important;
}

.rb-rounded-75 {
  border-bottom-right-radius: 75px !important;
}

.lt-rounded-75 {
  border-top-left-radius: 75px !important;
}

.rt-rounded-75 {
  border-top-right-radius: 75px !important;
}

.mt-75 {
  margin-top: 75px !important;
}

.mb-75 {
  margin-bottom: 75px !important;
}

.mr-75 {
  margin-right: 75px !important;
}

.ml-75 {
  margin-left: 75px !important;
}

.mx-75 {
  margin-left: 75px !important;
  margin-right: 75px !important;
}

.my-75 {
  margin-top: 75px !important;
  margin-bottom: 75px !important;
}

.pt-75 {
  padding-top: 75px !important;
}

.pb-75 {
  padding-bottom: 75px !important;
}

.pr-75 {
  padding-right: 75px !important;
}

.pl-75 {
  padding-left: 75px !important;
}

.px-75 {
  padding-left: 75px !important;
  padding-right: 75px !important;
}

.py-75 {
  padding-top: 75px !important;
  padding-bottom: 75px !important;
}

.p-75 {
  padding: 75px !important;
}

.m-75 {
  margin: 75px !important;
}

.w-75 {
  width: 75%!important;
}

.lb-rounded-76 {
  border-bottom-left-radius: 76px !important;
}

.minh-76 {
  min-height: 76px !important;
}

.rb-rounded-76 {
  border-bottom-right-radius: 76px !important;
}

.lt-rounded-76 {
  border-top-left-radius: 76px !important;
}

.rt-rounded-76 {
  border-top-right-radius: 76px !important;
}

.mt-76 {
  margin-top: 76px !important;
}

.mb-76 {
  margin-bottom: 76px !important;
}

.mr-76 {
  margin-right: 76px !important;
}

.ml-76 {
  margin-left: 76px !important;
}

.mx-76 {
  margin-left: 76px !important;
  margin-right: 76px !important;
}

.my-76 {
  margin-top: 76px !important;
  margin-bottom: 76px !important;
}

.pt-76 {
  padding-top: 76px !important;
}

.pb-76 {
  padding-bottom: 76px !important;
}

.pr-76 {
  padding-right: 76px !important;
}

.pl-76 {
  padding-left: 76px !important;
}

.px-76 {
  padding-left: 76px !important;
  padding-right: 76px !important;
}

.py-76 {
  padding-top: 76px !important;
  padding-bottom: 76px !important;
}

.p-76 {
  padding: 76px !important;
}

.m-76 {
  margin: 76px !important;
}

.w-76 {
  width: 76%!important;
}

.lb-rounded-77 {
  border-bottom-left-radius: 77px !important;
}

.minh-77 {
  min-height: 77px !important;
}

.rb-rounded-77 {
  border-bottom-right-radius: 77px !important;
}

.lt-rounded-77 {
  border-top-left-radius: 77px !important;
}

.rt-rounded-77 {
  border-top-right-radius: 77px !important;
}

.mt-77 {
  margin-top: 77px !important;
}

.mb-77 {
  margin-bottom: 77px !important;
}

.mr-77 {
  margin-right: 77px !important;
}

.ml-77 {
  margin-left: 77px !important;
}

.mx-77 {
  margin-left: 77px !important;
  margin-right: 77px !important;
}

.my-77 {
  margin-top: 77px !important;
  margin-bottom: 77px !important;
}

.pt-77 {
  padding-top: 77px !important;
}

.pb-77 {
  padding-bottom: 77px !important;
}

.pr-77 {
  padding-right: 77px !important;
}

.pl-77 {
  padding-left: 77px !important;
}

.px-77 {
  padding-left: 77px !important;
  padding-right: 77px !important;
}

.py-77 {
  padding-top: 77px !important;
  padding-bottom: 77px !important;
}

.p-77 {
  padding: 77px !important;
}

.m-77 {
  margin: 77px !important;
}

.w-77 {
  width: 77%!important;
}

.lb-rounded-78 {
  border-bottom-left-radius: 78px !important;
}

.minh-78 {
  min-height: 78px !important;
}

.rb-rounded-78 {
  border-bottom-right-radius: 78px !important;
}

.lt-rounded-78 {
  border-top-left-radius: 78px !important;
}

.rt-rounded-78 {
  border-top-right-radius: 78px !important;
}

.mt-78 {
  margin-top: 78px !important;
}

.mb-78 {
  margin-bottom: 78px !important;
}

.mr-78 {
  margin-right: 78px !important;
}

.ml-78 {
  margin-left: 78px !important;
}

.mx-78 {
  margin-left: 78px !important;
  margin-right: 78px !important;
}

.my-78 {
  margin-top: 78px !important;
  margin-bottom: 78px !important;
}

.pt-78 {
  padding-top: 78px !important;
}

.pb-78 {
  padding-bottom: 78px !important;
}

.pr-78 {
  padding-right: 78px !important;
}

.pl-78 {
  padding-left: 78px !important;
}

.px-78 {
  padding-left: 78px !important;
  padding-right: 78px !important;
}

.py-78 {
  padding-top: 78px !important;
  padding-bottom: 78px !important;
}

.p-78 {
  padding: 78px !important;
}

.m-78 {
  margin: 78px !important;
}

.w-78 {
  width: 78%!important;
}

.lb-rounded-79 {
  border-bottom-left-radius: 79px !important;
}

.minh-79 {
  min-height: 79px !important;
}

.rb-rounded-79 {
  border-bottom-right-radius: 79px !important;
}

.lt-rounded-79 {
  border-top-left-radius: 79px !important;
}

.rt-rounded-79 {
  border-top-right-radius: 79px !important;
}

.mt-79 {
  margin-top: 79px !important;
}

.mb-79 {
  margin-bottom: 79px !important;
}

.mr-79 {
  margin-right: 79px !important;
}

.ml-79 {
  margin-left: 79px !important;
}

.mx-79 {
  margin-left: 79px !important;
  margin-right: 79px !important;
}

.my-79 {
  margin-top: 79px !important;
  margin-bottom: 79px !important;
}

.pt-79 {
  padding-top: 79px !important;
}

.pb-79 {
  padding-bottom: 79px !important;
}

.pr-79 {
  padding-right: 79px !important;
}

.pl-79 {
  padding-left: 79px !important;
}

.px-79 {
  padding-left: 79px !important;
  padding-right: 79px !important;
}

.py-79 {
  padding-top: 79px !important;
  padding-bottom: 79px !important;
}

.p-79 {
  padding: 79px !important;
}

.m-79 {
  margin: 79px !important;
}

.w-79 {
  width: 79%!important;
}

.lb-rounded-80 {
  border-bottom-left-radius: 80px !important;
}

.minh-80 {
  min-height: 80px !important;
}

.rb-rounded-80 {
  border-bottom-right-radius: 80px !important;
}

.lt-rounded-80 {
  border-top-left-radius: 80px !important;
}

.rt-rounded-80 {
  border-top-right-radius: 80px !important;
}

.mt-80 {
  margin-top: 80px !important;
}

.mb-80 {
  margin-bottom: 80px !important;
}

.mr-80 {
  margin-right: 80px !important;
}

.ml-80 {
  margin-left: 80px !important;
}

.mx-80 {
  margin-left: 80px !important;
  margin-right: 80px !important;
}

.my-80 {
  margin-top: 80px !important;
  margin-bottom: 80px !important;
}

.pt-80 {
  padding-top: 80px !important;
}

.pb-80 {
  padding-bottom: 80px !important;
}

.pr-80 {
  padding-right: 80px !important;
}

.pl-80 {
  padding-left: 80px !important;
}

.px-80 {
  padding-left: 80px !important;
  padding-right: 80px !important;
}

.py-80 {
  padding-top: 80px !important;
  padding-bottom: 80px !important;
}

.p-80 {
  padding: 80px !important;
}

.m-80 {
  margin: 80px !important;
}

.w-80 {
  width: 80%!important;
}

.lb-rounded-81 {
  border-bottom-left-radius: 81px !important;
}

.minh-81 {
  min-height: 81px !important;
}

.rb-rounded-81 {
  border-bottom-right-radius: 81px !important;
}

.lt-rounded-81 {
  border-top-left-radius: 81px !important;
}

.rt-rounded-81 {
  border-top-right-radius: 81px !important;
}

.mt-81 {
  margin-top: 81px !important;
}

.mb-81 {
  margin-bottom: 81px !important;
}

.mr-81 {
  margin-right: 81px !important;
}

.ml-81 {
  margin-left: 81px !important;
}

.mx-81 {
  margin-left: 81px !important;
  margin-right: 81px !important;
}

.my-81 {
  margin-top: 81px !important;
  margin-bottom: 81px !important;
}

.pt-81 {
  padding-top: 81px !important;
}

.pb-81 {
  padding-bottom: 81px !important;
}

.pr-81 {
  padding-right: 81px !important;
}

.pl-81 {
  padding-left: 81px !important;
}

.px-81 {
  padding-left: 81px !important;
  padding-right: 81px !important;
}

.py-81 {
  padding-top: 81px !important;
  padding-bottom: 81px !important;
}

.p-81 {
  padding: 81px !important;
}

.m-81 {
  margin: 81px !important;
}

.w-81 {
  width: 81%!important;
}

.lb-rounded-82 {
  border-bottom-left-radius: 82px !important;
}

.minh-82 {
  min-height: 82px !important;
}

.rb-rounded-82 {
  border-bottom-right-radius: 82px !important;
}

.lt-rounded-82 {
  border-top-left-radius: 82px !important;
}

.rt-rounded-82 {
  border-top-right-radius: 82px !important;
}

.mt-82 {
  margin-top: 82px !important;
}

.mb-82 {
  margin-bottom: 82px !important;
}

.mr-82 {
  margin-right: 82px !important;
}

.ml-82 {
  margin-left: 82px !important;
}

.mx-82 {
  margin-left: 82px !important;
  margin-right: 82px !important;
}

.my-82 {
  margin-top: 82px !important;
  margin-bottom: 82px !important;
}

.pt-82 {
  padding-top: 82px !important;
}

.pb-82 {
  padding-bottom: 82px !important;
}

.pr-82 {
  padding-right: 82px !important;
}

.pl-82 {
  padding-left: 82px !important;
}

.px-82 {
  padding-left: 82px !important;
  padding-right: 82px !important;
}

.py-82 {
  padding-top: 82px !important;
  padding-bottom: 82px !important;
}

.p-82 {
  padding: 82px !important;
}

.m-82 {
  margin: 82px !important;
}

.w-82 {
  width: 82%!important;
}

.lb-rounded-83 {
  border-bottom-left-radius: 83px !important;
}

.minh-83 {
  min-height: 83px !important;
}

.rb-rounded-83 {
  border-bottom-right-radius: 83px !important;
}

.lt-rounded-83 {
  border-top-left-radius: 83px !important;
}

.rt-rounded-83 {
  border-top-right-radius: 83px !important;
}

.mt-83 {
  margin-top: 83px !important;
}

.mb-83 {
  margin-bottom: 83px !important;
}

.mr-83 {
  margin-right: 83px !important;
}

.ml-83 {
  margin-left: 83px !important;
}

.mx-83 {
  margin-left: 83px !important;
  margin-right: 83px !important;
}

.my-83 {
  margin-top: 83px !important;
  margin-bottom: 83px !important;
}

.pt-83 {
  padding-top: 83px !important;
}

.pb-83 {
  padding-bottom: 83px !important;
}

.pr-83 {
  padding-right: 83px !important;
}

.pl-83 {
  padding-left: 83px !important;
}

.px-83 {
  padding-left: 83px !important;
  padding-right: 83px !important;
}

.py-83 {
  padding-top: 83px !important;
  padding-bottom: 83px !important;
}

.p-83 {
  padding: 83px !important;
}

.m-83 {
  margin: 83px !important;
}

.w-83 {
  width: 83%!important;
}

.lb-rounded-84 {
  border-bottom-left-radius: 84px !important;
}

.minh-84 {
  min-height: 84px !important;
}

.rb-rounded-84 {
  border-bottom-right-radius: 84px !important;
}

.lt-rounded-84 {
  border-top-left-radius: 84px !important;
}

.rt-rounded-84 {
  border-top-right-radius: 84px !important;
}

.mt-84 {
  margin-top: 84px !important;
}

.mb-84 {
  margin-bottom: 84px !important;
}

.mr-84 {
  margin-right: 84px !important;
}

.ml-84 {
  margin-left: 84px !important;
}

.mx-84 {
  margin-left: 84px !important;
  margin-right: 84px !important;
}

.my-84 {
  margin-top: 84px !important;
  margin-bottom: 84px !important;
}

.pt-84 {
  padding-top: 84px !important;
}

.pb-84 {
  padding-bottom: 84px !important;
}

.pr-84 {
  padding-right: 84px !important;
}

.pl-84 {
  padding-left: 84px !important;
}

.px-84 {
  padding-left: 84px !important;
  padding-right: 84px !important;
}

.py-84 {
  padding-top: 84px !important;
  padding-bottom: 84px !important;
}

.p-84 {
  padding: 84px !important;
}

.m-84 {
  margin: 84px !important;
}

.w-84 {
  width: 84%!important;
}

.lb-rounded-85 {
  border-bottom-left-radius: 85px !important;
}

.minh-85 {
  min-height: 85px !important;
}

.rb-rounded-85 {
  border-bottom-right-radius: 85px !important;
}

.lt-rounded-85 {
  border-top-left-radius: 85px !important;
}

.rt-rounded-85 {
  border-top-right-radius: 85px !important;
}

.mt-85 {
  margin-top: 85px !important;
}

.mb-85 {
  margin-bottom: 85px !important;
}

.mr-85 {
  margin-right: 85px !important;
}

.ml-85 {
  margin-left: 85px !important;
}

.mx-85 {
  margin-left: 85px !important;
  margin-right: 85px !important;
}

.my-85 {
  margin-top: 85px !important;
  margin-bottom: 85px !important;
}

.pt-85 {
  padding-top: 85px !important;
}

.pb-85 {
  padding-bottom: 85px !important;
}

.pr-85 {
  padding-right: 85px !important;
}

.pl-85 {
  padding-left: 85px !important;
}

.px-85 {
  padding-left: 85px !important;
  padding-right: 85px !important;
}

.py-85 {
  padding-top: 85px !important;
  padding-bottom: 85px !important;
}

.p-85 {
  padding: 85px !important;
}

.m-85 {
  margin: 85px !important;
}

.w-85 {
  width: 85%!important;
}

.lb-rounded-86 {
  border-bottom-left-radius: 86px !important;
}

.minh-86 {
  min-height: 86px !important;
}

.rb-rounded-86 {
  border-bottom-right-radius: 86px !important;
}

.lt-rounded-86 {
  border-top-left-radius: 86px !important;
}

.rt-rounded-86 {
  border-top-right-radius: 86px !important;
}

.mt-86 {
  margin-top: 86px !important;
}

.mb-86 {
  margin-bottom: 86px !important;
}

.mr-86 {
  margin-right: 86px !important;
}

.ml-86 {
  margin-left: 86px !important;
}

.mx-86 {
  margin-left: 86px !important;
  margin-right: 86px !important;
}

.my-86 {
  margin-top: 86px !important;
  margin-bottom: 86px !important;
}

.pt-86 {
  padding-top: 86px !important;
}

.pb-86 {
  padding-bottom: 86px !important;
}

.pr-86 {
  padding-right: 86px !important;
}

.pl-86 {
  padding-left: 86px !important;
}

.px-86 {
  padding-left: 86px !important;
  padding-right: 86px !important;
}

.py-86 {
  padding-top: 86px !important;
  padding-bottom: 86px !important;
}

.p-86 {
  padding: 86px !important;
}

.m-86 {
  margin: 86px !important;
}

.w-86 {
  width: 86%!important;
}

.lb-rounded-87 {
  border-bottom-left-radius: 87px !important;
}

.minh-87 {
  min-height: 87px !important;
}

.rb-rounded-87 {
  border-bottom-right-radius: 87px !important;
}

.lt-rounded-87 {
  border-top-left-radius: 87px !important;
}

.rt-rounded-87 {
  border-top-right-radius: 87px !important;
}

.mt-87 {
  margin-top: 87px !important;
}

.mb-87 {
  margin-bottom: 87px !important;
}

.mr-87 {
  margin-right: 87px !important;
}

.ml-87 {
  margin-left: 87px !important;
}

.mx-87 {
  margin-left: 87px !important;
  margin-right: 87px !important;
}

.my-87 {
  margin-top: 87px !important;
  margin-bottom: 87px !important;
}

.pt-87 {
  padding-top: 87px !important;
}

.pb-87 {
  padding-bottom: 87px !important;
}

.pr-87 {
  padding-right: 87px !important;
}

.pl-87 {
  padding-left: 87px !important;
}

.px-87 {
  padding-left: 87px !important;
  padding-right: 87px !important;
}

.py-87 {
  padding-top: 87px !important;
  padding-bottom: 87px !important;
}

.p-87 {
  padding: 87px !important;
}

.m-87 {
  margin: 87px !important;
}

.w-87 {
  width: 87%!important;
}

.lb-rounded-88 {
  border-bottom-left-radius: 88px !important;
}

.minh-88 {
  min-height: 88px !important;
}

.rb-rounded-88 {
  border-bottom-right-radius: 88px !important;
}

.lt-rounded-88 {
  border-top-left-radius: 88px !important;
}

.rt-rounded-88 {
  border-top-right-radius: 88px !important;
}

.mt-88 {
  margin-top: 88px !important;
}

.mb-88 {
  margin-bottom: 88px !important;
}

.mr-88 {
  margin-right: 88px !important;
}

.ml-88 {
  margin-left: 88px !important;
}

.mx-88 {
  margin-left: 88px !important;
  margin-right: 88px !important;
}

.my-88 {
  margin-top: 88px !important;
  margin-bottom: 88px !important;
}

.pt-88 {
  padding-top: 88px !important;
}

.pb-88 {
  padding-bottom: 88px !important;
}

.pr-88 {
  padding-right: 88px !important;
}

.pl-88 {
  padding-left: 88px !important;
}

.px-88 {
  padding-left: 88px !important;
  padding-right: 88px !important;
}

.py-88 {
  padding-top: 88px !important;
  padding-bottom: 88px !important;
}

.p-88 {
  padding: 88px !important;
}

.m-88 {
  margin: 88px !important;
}

.w-88 {
  width: 88%!important;
}

.lb-rounded-89 {
  border-bottom-left-radius: 89px !important;
}

.minh-89 {
  min-height: 89px !important;
}

.rb-rounded-89 {
  border-bottom-right-radius: 89px !important;
}

.lt-rounded-89 {
  border-top-left-radius: 89px !important;
}

.rt-rounded-89 {
  border-top-right-radius: 89px !important;
}

.mt-89 {
  margin-top: 89px !important;
}

.mb-89 {
  margin-bottom: 89px !important;
}

.mr-89 {
  margin-right: 89px !important;
}

.ml-89 {
  margin-left: 89px !important;
}

.mx-89 {
  margin-left: 89px !important;
  margin-right: 89px !important;
}

.my-89 {
  margin-top: 89px !important;
  margin-bottom: 89px !important;
}

.pt-89 {
  padding-top: 89px !important;
}

.pb-89 {
  padding-bottom: 89px !important;
}

.pr-89 {
  padding-right: 89px !important;
}

.pl-89 {
  padding-left: 89px !important;
}

.px-89 {
  padding-left: 89px !important;
  padding-right: 89px !important;
}

.py-89 {
  padding-top: 89px !important;
  padding-bottom: 89px !important;
}

.p-89 {
  padding: 89px !important;
}

.m-89 {
  margin: 89px !important;
}

.w-89 {
  width: 89%!important;
}

.lb-rounded-90 {
  border-bottom-left-radius: 90px !important;
}

.minh-90 {
  min-height: 90px !important;
}

.rb-rounded-90 {
  border-bottom-right-radius: 90px !important;
}

.lt-rounded-90 {
  border-top-left-radius: 90px !important;
}

.rt-rounded-90 {
  border-top-right-radius: 90px !important;
}

.mt-90 {
  margin-top: 90px !important;
}

.mb-90 {
  margin-bottom: 90px !important;
}

.mr-90 {
  margin-right: 90px !important;
}

.ml-90 {
  margin-left: 90px !important;
}

.mx-90 {
  margin-left: 90px !important;
  margin-right: 90px !important;
}

.my-90 {
  margin-top: 90px !important;
  margin-bottom: 90px !important;
}

.pt-90 {
  padding-top: 90px !important;
}

.pb-90 {
  padding-bottom: 90px !important;
}

.pr-90 {
  padding-right: 90px !important;
}

.pl-90 {
  padding-left: 90px !important;
}

.px-90 {
  padding-left: 90px !important;
  padding-right: 90px !important;
}

.py-90 {
  padding-top: 90px !important;
  padding-bottom: 90px !important;
}

.p-90 {
  padding: 90px !important;
}

.m-90 {
  margin: 90px !important;
}

.w-90 {
  width: 90%!important;
}

.lb-rounded-91 {
  border-bottom-left-radius: 91px !important;
}

.minh-91 {
  min-height: 91px !important;
}

.rb-rounded-91 {
  border-bottom-right-radius: 91px !important;
}

.lt-rounded-91 {
  border-top-left-radius: 91px !important;
}

.rt-rounded-91 {
  border-top-right-radius: 91px !important;
}

.mt-91 {
  margin-top: 91px !important;
}

.mb-91 {
  margin-bottom: 91px !important;
}

.mr-91 {
  margin-right: 91px !important;
}

.ml-91 {
  margin-left: 91px !important;
}

.mx-91 {
  margin-left: 91px !important;
  margin-right: 91px !important;
}

.my-91 {
  margin-top: 91px !important;
  margin-bottom: 91px !important;
}

.pt-91 {
  padding-top: 91px !important;
}

.pb-91 {
  padding-bottom: 91px !important;
}

.pr-91 {
  padding-right: 91px !important;
}

.pl-91 {
  padding-left: 91px !important;
}

.px-91 {
  padding-left: 91px !important;
  padding-right: 91px !important;
}

.py-91 {
  padding-top: 91px !important;
  padding-bottom: 91px !important;
}

.p-91 {
  padding: 91px !important;
}

.m-91 {
  margin: 91px !important;
}

.w-91 {
  width: 91%!important;
}

.lb-rounded-92 {
  border-bottom-left-radius: 92px !important;
}

.minh-92 {
  min-height: 92px !important;
}

.rb-rounded-92 {
  border-bottom-right-radius: 92px !important;
}

.lt-rounded-92 {
  border-top-left-radius: 92px !important;
}

.rt-rounded-92 {
  border-top-right-radius: 92px !important;
}

.mt-92 {
  margin-top: 92px !important;
}

.mb-92 {
  margin-bottom: 92px !important;
}

.mr-92 {
  margin-right: 92px !important;
}

.ml-92 {
  margin-left: 92px !important;
}

.mx-92 {
  margin-left: 92px !important;
  margin-right: 92px !important;
}

.my-92 {
  margin-top: 92px !important;
  margin-bottom: 92px !important;
}

.pt-92 {
  padding-top: 92px !important;
}

.pb-92 {
  padding-bottom: 92px !important;
}

.pr-92 {
  padding-right: 92px !important;
}

.pl-92 {
  padding-left: 92px !important;
}

.px-92 {
  padding-left: 92px !important;
  padding-right: 92px !important;
}

.py-92 {
  padding-top: 92px !important;
  padding-bottom: 92px !important;
}

.p-92 {
  padding: 92px !important;
}

.m-92 {
  margin: 92px !important;
}

.w-92 {
  width: 92%!important;
}

.lb-rounded-93 {
  border-bottom-left-radius: 93px !important;
}

.minh-93 {
  min-height: 93px !important;
}

.rb-rounded-93 {
  border-bottom-right-radius: 93px !important;
}

.lt-rounded-93 {
  border-top-left-radius: 93px !important;
}

.rt-rounded-93 {
  border-top-right-radius: 93px !important;
}

.mt-93 {
  margin-top: 93px !important;
}

.mb-93 {
  margin-bottom: 93px !important;
}

.mr-93 {
  margin-right: 93px !important;
}

.ml-93 {
  margin-left: 93px !important;
}

.mx-93 {
  margin-left: 93px !important;
  margin-right: 93px !important;
}

.my-93 {
  margin-top: 93px !important;
  margin-bottom: 93px !important;
}

.pt-93 {
  padding-top: 93px !important;
}

.pb-93 {
  padding-bottom: 93px !important;
}

.pr-93 {
  padding-right: 93px !important;
}

.pl-93 {
  padding-left: 93px !important;
}

.px-93 {
  padding-left: 93px !important;
  padding-right: 93px !important;
}

.py-93 {
  padding-top: 93px !important;
  padding-bottom: 93px !important;
}

.p-93 {
  padding: 93px !important;
}

.m-93 {
  margin: 93px !important;
}

.w-93 {
  width: 93%!important;
}

.lb-rounded-94 {
  border-bottom-left-radius: 94px !important;
}

.minh-94 {
  min-height: 94px !important;
}

.rb-rounded-94 {
  border-bottom-right-radius: 94px !important;
}

.lt-rounded-94 {
  border-top-left-radius: 94px !important;
}

.rt-rounded-94 {
  border-top-right-radius: 94px !important;
}

.mt-94 {
  margin-top: 94px !important;
}

.mb-94 {
  margin-bottom: 94px !important;
}

.mr-94 {
  margin-right: 94px !important;
}

.ml-94 {
  margin-left: 94px !important;
}

.mx-94 {
  margin-left: 94px !important;
  margin-right: 94px !important;
}

.my-94 {
  margin-top: 94px !important;
  margin-bottom: 94px !important;
}

.pt-94 {
  padding-top: 94px !important;
}

.pb-94 {
  padding-bottom: 94px !important;
}

.pr-94 {
  padding-right: 94px !important;
}

.pl-94 {
  padding-left: 94px !important;
}

.px-94 {
  padding-left: 94px !important;
  padding-right: 94px !important;
}

.py-94 {
  padding-top: 94px !important;
  padding-bottom: 94px !important;
}

.p-94 {
  padding: 94px !important;
}

.m-94 {
  margin: 94px !important;
}

.w-94 {
  width: 94%!important;
}

.lb-rounded-95 {
  border-bottom-left-radius: 95px !important;
}

.minh-95 {
  min-height: 95px !important;
}

.rb-rounded-95 {
  border-bottom-right-radius: 95px !important;
}

.lt-rounded-95 {
  border-top-left-radius: 95px !important;
}

.rt-rounded-95 {
  border-top-right-radius: 95px !important;
}

.mt-95 {
  margin-top: 95px !important;
}

.mb-95 {
  margin-bottom: 95px !important;
}

.mr-95 {
  margin-right: 95px !important;
}

.ml-95 {
  margin-left: 95px !important;
}

.mx-95 {
  margin-left: 95px !important;
  margin-right: 95px !important;
}

.my-95 {
  margin-top: 95px !important;
  margin-bottom: 95px !important;
}

.pt-95 {
  padding-top: 95px !important;
}

.pb-95 {
  padding-bottom: 95px !important;
}

.pr-95 {
  padding-right: 95px !important;
}

.pl-95 {
  padding-left: 95px !important;
}

.px-95 {
  padding-left: 95px !important;
  padding-right: 95px !important;
}

.py-95 {
  padding-top: 95px !important;
  padding-bottom: 95px !important;
}

.p-95 {
  padding: 95px !important;
}

.m-95 {
  margin: 95px !important;
}

.w-95 {
  width: 95%!important;
}

.lb-rounded-96 {
  border-bottom-left-radius: 96px !important;
}

.minh-96 {
  min-height: 96px !important;
}

.rb-rounded-96 {
  border-bottom-right-radius: 96px !important;
}

.lt-rounded-96 {
  border-top-left-radius: 96px !important;
}

.rt-rounded-96 {
  border-top-right-radius: 96px !important;
}

.mt-96 {
  margin-top: 96px !important;
}

.mb-96 {
  margin-bottom: 96px !important;
}

.mr-96 {
  margin-right: 96px !important;
}

.ml-96 {
  margin-left: 96px !important;
}

.mx-96 {
  margin-left: 96px !important;
  margin-right: 96px !important;
}

.my-96 {
  margin-top: 96px !important;
  margin-bottom: 96px !important;
}

.pt-96 {
  padding-top: 96px !important;
}

.pb-96 {
  padding-bottom: 96px !important;
}

.pr-96 {
  padding-right: 96px !important;
}

.pl-96 {
  padding-left: 96px !important;
}

.px-96 {
  padding-left: 96px !important;
  padding-right: 96px !important;
}

.py-96 {
  padding-top: 96px !important;
  padding-bottom: 96px !important;
}

.p-96 {
  padding: 96px !important;
}

.m-96 {
  margin: 96px !important;
}

.w-96 {
  width: 96%!important;
}

.lb-rounded-97 {
  border-bottom-left-radius: 97px !important;
}

.minh-97 {
  min-height: 97px !important;
}

.rb-rounded-97 {
  border-bottom-right-radius: 97px !important;
}

.lt-rounded-97 {
  border-top-left-radius: 97px !important;
}

.rt-rounded-97 {
  border-top-right-radius: 97px !important;
}

.mt-97 {
  margin-top: 97px !important;
}

.mb-97 {
  margin-bottom: 97px !important;
}

.mr-97 {
  margin-right: 97px !important;
}

.ml-97 {
  margin-left: 97px !important;
}

.mx-97 {
  margin-left: 97px !important;
  margin-right: 97px !important;
}

.my-97 {
  margin-top: 97px !important;
  margin-bottom: 97px !important;
}

.pt-97 {
  padding-top: 97px !important;
}

.pb-97 {
  padding-bottom: 97px !important;
}

.pr-97 {
  padding-right: 97px !important;
}

.pl-97 {
  padding-left: 97px !important;
}

.px-97 {
  padding-left: 97px !important;
  padding-right: 97px !important;
}

.py-97 {
  padding-top: 97px !important;
  padding-bottom: 97px !important;
}

.p-97 {
  padding: 97px !important;
}

.m-97 {
  margin: 97px !important;
}

.w-97 {
  width: 97%!important;
}

.lb-rounded-98 {
  border-bottom-left-radius: 98px !important;
}

.minh-98 {
  min-height: 98px !important;
}

.rb-rounded-98 {
  border-bottom-right-radius: 98px !important;
}

.lt-rounded-98 {
  border-top-left-radius: 98px !important;
}

.rt-rounded-98 {
  border-top-right-radius: 98px !important;
}

.mt-98 {
  margin-top: 98px !important;
}

.mb-98 {
  margin-bottom: 98px !important;
}

.mr-98 {
  margin-right: 98px !important;
}

.ml-98 {
  margin-left: 98px !important;
}

.mx-98 {
  margin-left: 98px !important;
  margin-right: 98px !important;
}

.my-98 {
  margin-top: 98px !important;
  margin-bottom: 98px !important;
}

.pt-98 {
  padding-top: 98px !important;
}

.pb-98 {
  padding-bottom: 98px !important;
}

.pr-98 {
  padding-right: 98px !important;
}

.pl-98 {
  padding-left: 98px !important;
}

.px-98 {
  padding-left: 98px !important;
  padding-right: 98px !important;
}

.py-98 {
  padding-top: 98px !important;
  padding-bottom: 98px !important;
}

.p-98 {
  padding: 98px !important;
}

.m-98 {
  margin: 98px !important;
}

.w-98 {
  width: 98%!important;
}

.lb-rounded-99 {
  border-bottom-left-radius: 99px !important;
}

.minh-99 {
  min-height: 99px !important;
}

.rb-rounded-99 {
  border-bottom-right-radius: 99px !important;
}

.lt-rounded-99 {
  border-top-left-radius: 99px !important;
}

.rt-rounded-99 {
  border-top-right-radius: 99px !important;
}

.mt-99 {
  margin-top: 99px !important;
}

.mb-99 {
  margin-bottom: 99px !important;
}

.mr-99 {
  margin-right: 99px !important;
}

.ml-99 {
  margin-left: 99px !important;
}

.mx-99 {
  margin-left: 99px !important;
  margin-right: 99px !important;
}

.my-99 {
  margin-top: 99px !important;
  margin-bottom: 99px !important;
}

.pt-99 {
  padding-top: 99px !important;
}

.pb-99 {
  padding-bottom: 99px !important;
}

.pr-99 {
  padding-right: 99px !important;
}

.pl-99 {
  padding-left: 99px !important;
}

.px-99 {
  padding-left: 99px !important;
  padding-right: 99px !important;
}

.py-99 {
  padding-top: 99px !important;
  padding-bottom: 99px !important;
}

.p-99 {
  padding: 99px !important;
}

.m-99 {
  margin: 99px !important;
}

.w-99 {
  width: 99%!important;
}

.lb-rounded-100 {
  border-bottom-left-radius: 100px !important;
}

.minh-100 {
  min-height: 100px !important;
}

.rb-rounded-100 {
  border-bottom-right-radius: 100px !important;
}

.lt-rounded-100 {
  border-top-left-radius: 100px !important;
}

.rt-rounded-100 {
  border-top-right-radius: 100px !important;
}

.mt-100 {
  margin-top: 100px !important;
}

.mb-100 {
  margin-bottom: 100px !important;
}

.mr-100 {
  margin-right: 100px !important;
}

.ml-100 {
  margin-left: 100px !important;
}

.mx-100 {
  margin-left: 100px !important;
  margin-right: 100px !important;
}

.my-100 {
  margin-top: 100px !important;
  margin-bottom: 100px !important;
}

.pt-100 {
  padding-top: 100px !important;
}

.pb-100 {
  padding-bottom: 100px !important;
}

.pr-100 {
  padding-right: 100px !important;
}

.pl-100 {
  padding-left: 100px !important;
}

.px-100 {
  padding-left: 100px !important;
  padding-right: 100px !important;
}

.py-100 {
  padding-top: 100px !important;
  padding-bottom: 100px !important;
}

.p-100 {
  padding: 100px !important;
}

.m-100 {
  margin: 100px !important;
}

.w-100 {
  width: 100%!important;
}

.lb-rounded-101 {
  border-bottom-left-radius: 101px !important;
}

.minh-101 {
  min-height: 101px !important;
}

.rb-rounded-101 {
  border-bottom-right-radius: 101px !important;
}

.lt-rounded-101 {
  border-top-left-radius: 101px !important;
}

.rt-rounded-101 {
  border-top-right-radius: 101px !important;
}

.mt-101 {
  margin-top: 101px !important;
}

.mb-101 {
  margin-bottom: 101px !important;
}

.mr-101 {
  margin-right: 101px !important;
}

.ml-101 {
  margin-left: 101px !important;
}

.mx-101 {
  margin-left: 101px !important;
  margin-right: 101px !important;
}

.my-101 {
  margin-top: 101px !important;
  margin-bottom: 101px !important;
}

.pt-101 {
  padding-top: 101px !important;
}

.pb-101 {
  padding-bottom: 101px !important;
}

.pr-101 {
  padding-right: 101px !important;
}

.pl-101 {
  padding-left: 101px !important;
}

.px-101 {
  padding-left: 101px !important;
  padding-right: 101px !important;
}

.py-101 {
  padding-top: 101px !important;
  padding-bottom: 101px !important;
}

.p-101 {
  padding: 101px !important;
}

.m-101 {
  margin: 101px !important;
}

.w-101 {
  width: 101%!important;
}

.lb-rounded-102 {
  border-bottom-left-radius: 102px !important;
}

.minh-102 {
  min-height: 102px !important;
}

.rb-rounded-102 {
  border-bottom-right-radius: 102px !important;
}

.lt-rounded-102 {
  border-top-left-radius: 102px !important;
}

.rt-rounded-102 {
  border-top-right-radius: 102px !important;
}

.mt-102 {
  margin-top: 102px !important;
}

.mb-102 {
  margin-bottom: 102px !important;
}

.mr-102 {
  margin-right: 102px !important;
}

.ml-102 {
  margin-left: 102px !important;
}

.mx-102 {
  margin-left: 102px !important;
  margin-right: 102px !important;
}

.my-102 {
  margin-top: 102px !important;
  margin-bottom: 102px !important;
}

.pt-102 {
  padding-top: 102px !important;
}

.pb-102 {
  padding-bottom: 102px !important;
}

.pr-102 {
  padding-right: 102px !important;
}

.pl-102 {
  padding-left: 102px !important;
}

.px-102 {
  padding-left: 102px !important;
  padding-right: 102px !important;
}

.py-102 {
  padding-top: 102px !important;
  padding-bottom: 102px !important;
}

.p-102 {
  padding: 102px !important;
}

.m-102 {
  margin: 102px !important;
}

.w-102 {
  width: 102%!important;
}

.lb-rounded-103 {
  border-bottom-left-radius: 103px !important;
}

.minh-103 {
  min-height: 103px !important;
}

.rb-rounded-103 {
  border-bottom-right-radius: 103px !important;
}

.lt-rounded-103 {
  border-top-left-radius: 103px !important;
}

.rt-rounded-103 {
  border-top-right-radius: 103px !important;
}

.mt-103 {
  margin-top: 103px !important;
}

.mb-103 {
  margin-bottom: 103px !important;
}

.mr-103 {
  margin-right: 103px !important;
}

.ml-103 {
  margin-left: 103px !important;
}

.mx-103 {
  margin-left: 103px !important;
  margin-right: 103px !important;
}

.my-103 {
  margin-top: 103px !important;
  margin-bottom: 103px !important;
}

.pt-103 {
  padding-top: 103px !important;
}

.pb-103 {
  padding-bottom: 103px !important;
}

.pr-103 {
  padding-right: 103px !important;
}

.pl-103 {
  padding-left: 103px !important;
}

.px-103 {
  padding-left: 103px !important;
  padding-right: 103px !important;
}

.py-103 {
  padding-top: 103px !important;
  padding-bottom: 103px !important;
}

.p-103 {
  padding: 103px !important;
}

.m-103 {
  margin: 103px !important;
}

.w-103 {
  width: 103%!important;
}

.lb-rounded-104 {
  border-bottom-left-radius: 104px !important;
}

.minh-104 {
  min-height: 104px !important;
}

.rb-rounded-104 {
  border-bottom-right-radius: 104px !important;
}

.lt-rounded-104 {
  border-top-left-radius: 104px !important;
}

.rt-rounded-104 {
  border-top-right-radius: 104px !important;
}

.mt-104 {
  margin-top: 104px !important;
}

.mb-104 {
  margin-bottom: 104px !important;
}

.mr-104 {
  margin-right: 104px !important;
}

.ml-104 {
  margin-left: 104px !important;
}

.mx-104 {
  margin-left: 104px !important;
  margin-right: 104px !important;
}

.my-104 {
  margin-top: 104px !important;
  margin-bottom: 104px !important;
}

.pt-104 {
  padding-top: 104px !important;
}

.pb-104 {
  padding-bottom: 104px !important;
}

.pr-104 {
  padding-right: 104px !important;
}

.pl-104 {
  padding-left: 104px !important;
}

.px-104 {
  padding-left: 104px !important;
  padding-right: 104px !important;
}

.py-104 {
  padding-top: 104px !important;
  padding-bottom: 104px !important;
}

.p-104 {
  padding: 104px !important;
}

.m-104 {
  margin: 104px !important;
}

.w-104 {
  width: 104%!important;
}

.lb-rounded-105 {
  border-bottom-left-radius: 105px !important;
}

.minh-105 {
  min-height: 105px !important;
}

.rb-rounded-105 {
  border-bottom-right-radius: 105px !important;
}

.lt-rounded-105 {
  border-top-left-radius: 105px !important;
}

.rt-rounded-105 {
  border-top-right-radius: 105px !important;
}

.mt-105 {
  margin-top: 105px !important;
}

.mb-105 {
  margin-bottom: 105px !important;
}

.mr-105 {
  margin-right: 105px !important;
}

.ml-105 {
  margin-left: 105px !important;
}

.mx-105 {
  margin-left: 105px !important;
  margin-right: 105px !important;
}

.my-105 {
  margin-top: 105px !important;
  margin-bottom: 105px !important;
}

.pt-105 {
  padding-top: 105px !important;
}

.pb-105 {
  padding-bottom: 105px !important;
}

.pr-105 {
  padding-right: 105px !important;
}

.pl-105 {
  padding-left: 105px !important;
}

.px-105 {
  padding-left: 105px !important;
  padding-right: 105px !important;
}

.py-105 {
  padding-top: 105px !important;
  padding-bottom: 105px !important;
}

.p-105 {
  padding: 105px !important;
}

.m-105 {
  margin: 105px !important;
}

.w-105 {
  width: 105%!important;
}

.lb-rounded-106 {
  border-bottom-left-radius: 106px !important;
}

.minh-106 {
  min-height: 106px !important;
}

.rb-rounded-106 {
  border-bottom-right-radius: 106px !important;
}

.lt-rounded-106 {
  border-top-left-radius: 106px !important;
}

.rt-rounded-106 {
  border-top-right-radius: 106px !important;
}

.mt-106 {
  margin-top: 106px !important;
}

.mb-106 {
  margin-bottom: 106px !important;
}

.mr-106 {
  margin-right: 106px !important;
}

.ml-106 {
  margin-left: 106px !important;
}

.mx-106 {
  margin-left: 106px !important;
  margin-right: 106px !important;
}

.my-106 {
  margin-top: 106px !important;
  margin-bottom: 106px !important;
}

.pt-106 {
  padding-top: 106px !important;
}

.pb-106 {
  padding-bottom: 106px !important;
}

.pr-106 {
  padding-right: 106px !important;
}

.pl-106 {
  padding-left: 106px !important;
}

.px-106 {
  padding-left: 106px !important;
  padding-right: 106px !important;
}

.py-106 {
  padding-top: 106px !important;
  padding-bottom: 106px !important;
}

.p-106 {
  padding: 106px !important;
}

.m-106 {
  margin: 106px !important;
}

.w-106 {
  width: 106%!important;
}

.lb-rounded-107 {
  border-bottom-left-radius: 107px !important;
}

.minh-107 {
  min-height: 107px !important;
}

.rb-rounded-107 {
  border-bottom-right-radius: 107px !important;
}

.lt-rounded-107 {
  border-top-left-radius: 107px !important;
}

.rt-rounded-107 {
  border-top-right-radius: 107px !important;
}

.mt-107 {
  margin-top: 107px !important;
}

.mb-107 {
  margin-bottom: 107px !important;
}

.mr-107 {
  margin-right: 107px !important;
}

.ml-107 {
  margin-left: 107px !important;
}

.mx-107 {
  margin-left: 107px !important;
  margin-right: 107px !important;
}

.my-107 {
  margin-top: 107px !important;
  margin-bottom: 107px !important;
}

.pt-107 {
  padding-top: 107px !important;
}

.pb-107 {
  padding-bottom: 107px !important;
}

.pr-107 {
  padding-right: 107px !important;
}

.pl-107 {
  padding-left: 107px !important;
}

.px-107 {
  padding-left: 107px !important;
  padding-right: 107px !important;
}

.py-107 {
  padding-top: 107px !important;
  padding-bottom: 107px !important;
}

.p-107 {
  padding: 107px !important;
}

.m-107 {
  margin: 107px !important;
}

.w-107 {
  width: 107%!important;
}

.lb-rounded-108 {
  border-bottom-left-radius: 108px !important;
}

.minh-108 {
  min-height: 108px !important;
}

.rb-rounded-108 {
  border-bottom-right-radius: 108px !important;
}

.lt-rounded-108 {
  border-top-left-radius: 108px !important;
}

.rt-rounded-108 {
  border-top-right-radius: 108px !important;
}

.mt-108 {
  margin-top: 108px !important;
}

.mb-108 {
  margin-bottom: 108px !important;
}

.mr-108 {
  margin-right: 108px !important;
}

.ml-108 {
  margin-left: 108px !important;
}

.mx-108 {
  margin-left: 108px !important;
  margin-right: 108px !important;
}

.my-108 {
  margin-top: 108px !important;
  margin-bottom: 108px !important;
}

.pt-108 {
  padding-top: 108px !important;
}

.pb-108 {
  padding-bottom: 108px !important;
}

.pr-108 {
  padding-right: 108px !important;
}

.pl-108 {
  padding-left: 108px !important;
}

.px-108 {
  padding-left: 108px !important;
  padding-right: 108px !important;
}

.py-108 {
  padding-top: 108px !important;
  padding-bottom: 108px !important;
}

.p-108 {
  padding: 108px !important;
}

.m-108 {
  margin: 108px !important;
}

.w-108 {
  width: 108%!important;
}

.lb-rounded-109 {
  border-bottom-left-radius: 109px !important;
}

.minh-109 {
  min-height: 109px !important;
}

.rb-rounded-109 {
  border-bottom-right-radius: 109px !important;
}

.lt-rounded-109 {
  border-top-left-radius: 109px !important;
}

.rt-rounded-109 {
  border-top-right-radius: 109px !important;
}

.mt-109 {
  margin-top: 109px !important;
}

.mb-109 {
  margin-bottom: 109px !important;
}

.mr-109 {
  margin-right: 109px !important;
}

.ml-109 {
  margin-left: 109px !important;
}

.mx-109 {
  margin-left: 109px !important;
  margin-right: 109px !important;
}

.my-109 {
  margin-top: 109px !important;
  margin-bottom: 109px !important;
}

.pt-109 {
  padding-top: 109px !important;
}

.pb-109 {
  padding-bottom: 109px !important;
}

.pr-109 {
  padding-right: 109px !important;
}

.pl-109 {
  padding-left: 109px !important;
}

.px-109 {
  padding-left: 109px !important;
  padding-right: 109px !important;
}

.py-109 {
  padding-top: 109px !important;
  padding-bottom: 109px !important;
}

.p-109 {
  padding: 109px !important;
}

.m-109 {
  margin: 109px !important;
}

.w-109 {
  width: 109%!important;
}

.lb-rounded-110 {
  border-bottom-left-radius: 110px !important;
}

.minh-110 {
  min-height: 110px !important;
}

.rb-rounded-110 {
  border-bottom-right-radius: 110px !important;
}

.lt-rounded-110 {
  border-top-left-radius: 110px !important;
}

.rt-rounded-110 {
  border-top-right-radius: 110px !important;
}

.mt-110 {
  margin-top: 110px !important;
}

.mb-110 {
  margin-bottom: 110px !important;
}

.mr-110 {
  margin-right: 110px !important;
}

.ml-110 {
  margin-left: 110px !important;
}

.mx-110 {
  margin-left: 110px !important;
  margin-right: 110px !important;
}

.my-110 {
  margin-top: 110px !important;
  margin-bottom: 110px !important;
}

.pt-110 {
  padding-top: 110px !important;
}

.pb-110 {
  padding-bottom: 110px !important;
}

.pr-110 {
  padding-right: 110px !important;
}

.pl-110 {
  padding-left: 110px !important;
}

.px-110 {
  padding-left: 110px !important;
  padding-right: 110px !important;
}

.py-110 {
  padding-top: 110px !important;
  padding-bottom: 110px !important;
}

.p-110 {
  padding: 110px !important;
}

.m-110 {
  margin: 110px !important;
}

.w-110 {
  width: 110%!important;
}

.lb-rounded-111 {
  border-bottom-left-radius: 111px !important;
}

.minh-111 {
  min-height: 111px !important;
}

.rb-rounded-111 {
  border-bottom-right-radius: 111px !important;
}

.lt-rounded-111 {
  border-top-left-radius: 111px !important;
}

.rt-rounded-111 {
  border-top-right-radius: 111px !important;
}

.mt-111 {
  margin-top: 111px !important;
}

.mb-111 {
  margin-bottom: 111px !important;
}

.mr-111 {
  margin-right: 111px !important;
}

.ml-111 {
  margin-left: 111px !important;
}

.mx-111 {
  margin-left: 111px !important;
  margin-right: 111px !important;
}

.my-111 {
  margin-top: 111px !important;
  margin-bottom: 111px !important;
}

.pt-111 {
  padding-top: 111px !important;
}

.pb-111 {
  padding-bottom: 111px !important;
}

.pr-111 {
  padding-right: 111px !important;
}

.pl-111 {
  padding-left: 111px !important;
}

.px-111 {
  padding-left: 111px !important;
  padding-right: 111px !important;
}

.py-111 {
  padding-top: 111px !important;
  padding-bottom: 111px !important;
}

.p-111 {
  padding: 111px !important;
}

.m-111 {
  margin: 111px !important;
}

.w-111 {
  width: 111%!important;
}

.lb-rounded-112 {
  border-bottom-left-radius: 112px !important;
}

.minh-112 {
  min-height: 112px !important;
}

.rb-rounded-112 {
  border-bottom-right-radius: 112px !important;
}

.lt-rounded-112 {
  border-top-left-radius: 112px !important;
}

.rt-rounded-112 {
  border-top-right-radius: 112px !important;
}

.mt-112 {
  margin-top: 112px !important;
}

.mb-112 {
  margin-bottom: 112px !important;
}

.mr-112 {
  margin-right: 112px !important;
}

.ml-112 {
  margin-left: 112px !important;
}

.mx-112 {
  margin-left: 112px !important;
  margin-right: 112px !important;
}

.my-112 {
  margin-top: 112px !important;
  margin-bottom: 112px !important;
}

.pt-112 {
  padding-top: 112px !important;
}

.pb-112 {
  padding-bottom: 112px !important;
}

.pr-112 {
  padding-right: 112px !important;
}

.pl-112 {
  padding-left: 112px !important;
}

.px-112 {
  padding-left: 112px !important;
  padding-right: 112px !important;
}

.py-112 {
  padding-top: 112px !important;
  padding-bottom: 112px !important;
}

.p-112 {
  padding: 112px !important;
}

.m-112 {
  margin: 112px !important;
}

.w-112 {
  width: 112%!important;
}

.lb-rounded-113 {
  border-bottom-left-radius: 113px !important;
}

.minh-113 {
  min-height: 113px !important;
}

.rb-rounded-113 {
  border-bottom-right-radius: 113px !important;
}

.lt-rounded-113 {
  border-top-left-radius: 113px !important;
}

.rt-rounded-113 {
  border-top-right-radius: 113px !important;
}

.mt-113 {
  margin-top: 113px !important;
}

.mb-113 {
  margin-bottom: 113px !important;
}

.mr-113 {
  margin-right: 113px !important;
}

.ml-113 {
  margin-left: 113px !important;
}

.mx-113 {
  margin-left: 113px !important;
  margin-right: 113px !important;
}

.my-113 {
  margin-top: 113px !important;
  margin-bottom: 113px !important;
}

.pt-113 {
  padding-top: 113px !important;
}

.pb-113 {
  padding-bottom: 113px !important;
}

.pr-113 {
  padding-right: 113px !important;
}

.pl-113 {
  padding-left: 113px !important;
}

.px-113 {
  padding-left: 113px !important;
  padding-right: 113px !important;
}

.py-113 {
  padding-top: 113px !important;
  padding-bottom: 113px !important;
}

.p-113 {
  padding: 113px !important;
}

.m-113 {
  margin: 113px !important;
}

.w-113 {
  width: 113%!important;
}

.lb-rounded-114 {
  border-bottom-left-radius: 114px !important;
}

.minh-114 {
  min-height: 114px !important;
}

.rb-rounded-114 {
  border-bottom-right-radius: 114px !important;
}

.lt-rounded-114 {
  border-top-left-radius: 114px !important;
}

.rt-rounded-114 {
  border-top-right-radius: 114px !important;
}

.mt-114 {
  margin-top: 114px !important;
}

.mb-114 {
  margin-bottom: 114px !important;
}

.mr-114 {
  margin-right: 114px !important;
}

.ml-114 {
  margin-left: 114px !important;
}

.mx-114 {
  margin-left: 114px !important;
  margin-right: 114px !important;
}

.my-114 {
  margin-top: 114px !important;
  margin-bottom: 114px !important;
}

.pt-114 {
  padding-top: 114px !important;
}

.pb-114 {
  padding-bottom: 114px !important;
}

.pr-114 {
  padding-right: 114px !important;
}

.pl-114 {
  padding-left: 114px !important;
}

.px-114 {
  padding-left: 114px !important;
  padding-right: 114px !important;
}

.py-114 {
  padding-top: 114px !important;
  padding-bottom: 114px !important;
}

.p-114 {
  padding: 114px !important;
}

.m-114 {
  margin: 114px !important;
}

.w-114 {
  width: 114%!important;
}

.lb-rounded-115 {
  border-bottom-left-radius: 115px !important;
}

.minh-115 {
  min-height: 115px !important;
}

.rb-rounded-115 {
  border-bottom-right-radius: 115px !important;
}

.lt-rounded-115 {
  border-top-left-radius: 115px !important;
}

.rt-rounded-115 {
  border-top-right-radius: 115px !important;
}

.mt-115 {
  margin-top: 115px !important;
}

.mb-115 {
  margin-bottom: 115px !important;
}

.mr-115 {
  margin-right: 115px !important;
}

.ml-115 {
  margin-left: 115px !important;
}

.mx-115 {
  margin-left: 115px !important;
  margin-right: 115px !important;
}

.my-115 {
  margin-top: 115px !important;
  margin-bottom: 115px !important;
}

.pt-115 {
  padding-top: 115px !important;
}

.pb-115 {
  padding-bottom: 115px !important;
}

.pr-115 {
  padding-right: 115px !important;
}

.pl-115 {
  padding-left: 115px !important;
}

.px-115 {
  padding-left: 115px !important;
  padding-right: 115px !important;
}

.py-115 {
  padding-top: 115px !important;
  padding-bottom: 115px !important;
}

.p-115 {
  padding: 115px !important;
}

.m-115 {
  margin: 115px !important;
}

.w-115 {
  width: 115%!important;
}

.lb-rounded-116 {
  border-bottom-left-radius: 116px !important;
}

.minh-116 {
  min-height: 116px !important;
}

.rb-rounded-116 {
  border-bottom-right-radius: 116px !important;
}

.lt-rounded-116 {
  border-top-left-radius: 116px !important;
}

.rt-rounded-116 {
  border-top-right-radius: 116px !important;
}

.mt-116 {
  margin-top: 116px !important;
}

.mb-116 {
  margin-bottom: 116px !important;
}

.mr-116 {
  margin-right: 116px !important;
}

.ml-116 {
  margin-left: 116px !important;
}

.mx-116 {
  margin-left: 116px !important;
  margin-right: 116px !important;
}

.my-116 {
  margin-top: 116px !important;
  margin-bottom: 116px !important;
}

.pt-116 {
  padding-top: 116px !important;
}

.pb-116 {
  padding-bottom: 116px !important;
}

.pr-116 {
  padding-right: 116px !important;
}

.pl-116 {
  padding-left: 116px !important;
}

.px-116 {
  padding-left: 116px !important;
  padding-right: 116px !important;
}

.py-116 {
  padding-top: 116px !important;
  padding-bottom: 116px !important;
}

.p-116 {
  padding: 116px !important;
}

.m-116 {
  margin: 116px !important;
}

.w-116 {
  width: 116%!important;
}

.lb-rounded-117 {
  border-bottom-left-radius: 117px !important;
}

.minh-117 {
  min-height: 117px !important;
}

.rb-rounded-117 {
  border-bottom-right-radius: 117px !important;
}

.lt-rounded-117 {
  border-top-left-radius: 117px !important;
}

.rt-rounded-117 {
  border-top-right-radius: 117px !important;
}

.mt-117 {
  margin-top: 117px !important;
}

.mb-117 {
  margin-bottom: 117px !important;
}

.mr-117 {
  margin-right: 117px !important;
}

.ml-117 {
  margin-left: 117px !important;
}

.mx-117 {
  margin-left: 117px !important;
  margin-right: 117px !important;
}

.my-117 {
  margin-top: 117px !important;
  margin-bottom: 117px !important;
}

.pt-117 {
  padding-top: 117px !important;
}

.pb-117 {
  padding-bottom: 117px !important;
}

.pr-117 {
  padding-right: 117px !important;
}

.pl-117 {
  padding-left: 117px !important;
}

.px-117 {
  padding-left: 117px !important;
  padding-right: 117px !important;
}

.py-117 {
  padding-top: 117px !important;
  padding-bottom: 117px !important;
}

.p-117 {
  padding: 117px !important;
}

.m-117 {
  margin: 117px !important;
}

.w-117 {
  width: 117%!important;
}

.lb-rounded-118 {
  border-bottom-left-radius: 118px !important;
}

.minh-118 {
  min-height: 118px !important;
}

.rb-rounded-118 {
  border-bottom-right-radius: 118px !important;
}

.lt-rounded-118 {
  border-top-left-radius: 118px !important;
}

.rt-rounded-118 {
  border-top-right-radius: 118px !important;
}

.mt-118 {
  margin-top: 118px !important;
}

.mb-118 {
  margin-bottom: 118px !important;
}

.mr-118 {
  margin-right: 118px !important;
}

.ml-118 {
  margin-left: 118px !important;
}

.mx-118 {
  margin-left: 118px !important;
  margin-right: 118px !important;
}

.my-118 {
  margin-top: 118px !important;
  margin-bottom: 118px !important;
}

.pt-118 {
  padding-top: 118px !important;
}

.pb-118 {
  padding-bottom: 118px !important;
}

.pr-118 {
  padding-right: 118px !important;
}

.pl-118 {
  padding-left: 118px !important;
}

.px-118 {
  padding-left: 118px !important;
  padding-right: 118px !important;
}

.py-118 {
  padding-top: 118px !important;
  padding-bottom: 118px !important;
}

.p-118 {
  padding: 118px !important;
}

.m-118 {
  margin: 118px !important;
}

.w-118 {
  width: 118%!important;
}

.lb-rounded-119 {
  border-bottom-left-radius: 119px !important;
}

.minh-119 {
  min-height: 119px !important;
}

.rb-rounded-119 {
  border-bottom-right-radius: 119px !important;
}

.lt-rounded-119 {
  border-top-left-radius: 119px !important;
}

.rt-rounded-119 {
  border-top-right-radius: 119px !important;
}

.mt-119 {
  margin-top: 119px !important;
}

.mb-119 {
  margin-bottom: 119px !important;
}

.mr-119 {
  margin-right: 119px !important;
}

.ml-119 {
  margin-left: 119px !important;
}

.mx-119 {
  margin-left: 119px !important;
  margin-right: 119px !important;
}

.my-119 {
  margin-top: 119px !important;
  margin-bottom: 119px !important;
}

.pt-119 {
  padding-top: 119px !important;
}

.pb-119 {
  padding-bottom: 119px !important;
}

.pr-119 {
  padding-right: 119px !important;
}

.pl-119 {
  padding-left: 119px !important;
}

.px-119 {
  padding-left: 119px !important;
  padding-right: 119px !important;
}

.py-119 {
  padding-top: 119px !important;
  padding-bottom: 119px !important;
}

.p-119 {
  padding: 119px !important;
}

.m-119 {
  margin: 119px !important;
}

.w-119 {
  width: 119%!important;
}

.lb-rounded-120 {
  border-bottom-left-radius: 120px !important;
}

.minh-120 {
  min-height: 120px !important;
}

.rb-rounded-120 {
  border-bottom-right-radius: 120px !important;
}

.lt-rounded-120 {
  border-top-left-radius: 120px !important;
}

.rt-rounded-120 {
  border-top-right-radius: 120px !important;
}

.mt-120 {
  margin-top: 120px !important;
}

.mb-120 {
  margin-bottom: 120px !important;
}

.mr-120 {
  margin-right: 120px !important;
}

.ml-120 {
  margin-left: 120px !important;
}

.mx-120 {
  margin-left: 120px !important;
  margin-right: 120px !important;
}

.my-120 {
  margin-top: 120px !important;
  margin-bottom: 120px !important;
}

.pt-120 {
  padding-top: 120px !important;
}

.pb-120 {
  padding-bottom: 120px !important;
}

.pr-120 {
  padding-right: 120px !important;
}

.pl-120 {
  padding-left: 120px !important;
}

.px-120 {
  padding-left: 120px !important;
  padding-right: 120px !important;
}

.py-120 {
  padding-top: 120px !important;
  padding-bottom: 120px !important;
}

.p-120 {
  padding: 120px !important;
}

.m-120 {
  margin: 120px !important;
}

.w-120 {
  width: 120%!important;
}

.lb-rounded-121 {
  border-bottom-left-radius: 121px !important;
}

.minh-121 {
  min-height: 121px !important;
}

.rb-rounded-121 {
  border-bottom-right-radius: 121px !important;
}

.lt-rounded-121 {
  border-top-left-radius: 121px !important;
}

.rt-rounded-121 {
  border-top-right-radius: 121px !important;
}

.mt-121 {
  margin-top: 121px !important;
}

.mb-121 {
  margin-bottom: 121px !important;
}

.mr-121 {
  margin-right: 121px !important;
}

.ml-121 {
  margin-left: 121px !important;
}

.mx-121 {
  margin-left: 121px !important;
  margin-right: 121px !important;
}

.my-121 {
  margin-top: 121px !important;
  margin-bottom: 121px !important;
}

.pt-121 {
  padding-top: 121px !important;
}

.pb-121 {
  padding-bottom: 121px !important;
}

.pr-121 {
  padding-right: 121px !important;
}

.pl-121 {
  padding-left: 121px !important;
}

.px-121 {
  padding-left: 121px !important;
  padding-right: 121px !important;
}

.py-121 {
  padding-top: 121px !important;
  padding-bottom: 121px !important;
}

.p-121 {
  padding: 121px !important;
}

.m-121 {
  margin: 121px !important;
}

.w-121 {
  width: 121%!important;
}

.lb-rounded-122 {
  border-bottom-left-radius: 122px !important;
}

.minh-122 {
  min-height: 122px !important;
}

.rb-rounded-122 {
  border-bottom-right-radius: 122px !important;
}

.lt-rounded-122 {
  border-top-left-radius: 122px !important;
}

.rt-rounded-122 {
  border-top-right-radius: 122px !important;
}

.mt-122 {
  margin-top: 122px !important;
}

.mb-122 {
  margin-bottom: 122px !important;
}

.mr-122 {
  margin-right: 122px !important;
}

.ml-122 {
  margin-left: 122px !important;
}

.mx-122 {
  margin-left: 122px !important;
  margin-right: 122px !important;
}

.my-122 {
  margin-top: 122px !important;
  margin-bottom: 122px !important;
}

.pt-122 {
  padding-top: 122px !important;
}

.pb-122 {
  padding-bottom: 122px !important;
}

.pr-122 {
  padding-right: 122px !important;
}

.pl-122 {
  padding-left: 122px !important;
}

.px-122 {
  padding-left: 122px !important;
  padding-right: 122px !important;
}

.py-122 {
  padding-top: 122px !important;
  padding-bottom: 122px !important;
}

.p-122 {
  padding: 122px !important;
}

.m-122 {
  margin: 122px !important;
}

.w-122 {
  width: 122%!important;
}

.lb-rounded-123 {
  border-bottom-left-radius: 123px !important;
}

.minh-123 {
  min-height: 123px !important;
}

.rb-rounded-123 {
  border-bottom-right-radius: 123px !important;
}

.lt-rounded-123 {
  border-top-left-radius: 123px !important;
}

.rt-rounded-123 {
  border-top-right-radius: 123px !important;
}

.mt-123 {
  margin-top: 123px !important;
}

.mb-123 {
  margin-bottom: 123px !important;
}

.mr-123 {
  margin-right: 123px !important;
}

.ml-123 {
  margin-left: 123px !important;
}

.mx-123 {
  margin-left: 123px !important;
  margin-right: 123px !important;
}

.my-123 {
  margin-top: 123px !important;
  margin-bottom: 123px !important;
}

.pt-123 {
  padding-top: 123px !important;
}

.pb-123 {
  padding-bottom: 123px !important;
}

.pr-123 {
  padding-right: 123px !important;
}

.pl-123 {
  padding-left: 123px !important;
}

.px-123 {
  padding-left: 123px !important;
  padding-right: 123px !important;
}

.py-123 {
  padding-top: 123px !important;
  padding-bottom: 123px !important;
}

.p-123 {
  padding: 123px !important;
}

.m-123 {
  margin: 123px !important;
}

.w-123 {
  width: 123%!important;
}

.lb-rounded-124 {
  border-bottom-left-radius: 124px !important;
}

.minh-124 {
  min-height: 124px !important;
}

.rb-rounded-124 {
  border-bottom-right-radius: 124px !important;
}

.lt-rounded-124 {
  border-top-left-radius: 124px !important;
}

.rt-rounded-124 {
  border-top-right-radius: 124px !important;
}

.mt-124 {
  margin-top: 124px !important;
}

.mb-124 {
  margin-bottom: 124px !important;
}

.mr-124 {
  margin-right: 124px !important;
}

.ml-124 {
  margin-left: 124px !important;
}

.mx-124 {
  margin-left: 124px !important;
  margin-right: 124px !important;
}

.my-124 {
  margin-top: 124px !important;
  margin-bottom: 124px !important;
}

.pt-124 {
  padding-top: 124px !important;
}

.pb-124 {
  padding-bottom: 124px !important;
}

.pr-124 {
  padding-right: 124px !important;
}

.pl-124 {
  padding-left: 124px !important;
}

.px-124 {
  padding-left: 124px !important;
  padding-right: 124px !important;
}

.py-124 {
  padding-top: 124px !important;
  padding-bottom: 124px !important;
}

.p-124 {
  padding: 124px !important;
}

.m-124 {
  margin: 124px !important;
}

.w-124 {
  width: 124%!important;
}

.lb-rounded-125 {
  border-bottom-left-radius: 125px !important;
}

.minh-125 {
  min-height: 125px !important;
}

.rb-rounded-125 {
  border-bottom-right-radius: 125px !important;
}

.lt-rounded-125 {
  border-top-left-radius: 125px !important;
}

.rt-rounded-125 {
  border-top-right-radius: 125px !important;
}

.mt-125 {
  margin-top: 125px !important;
}

.mb-125 {
  margin-bottom: 125px !important;
}

.mr-125 {
  margin-right: 125px !important;
}

.ml-125 {
  margin-left: 125px !important;
}

.mx-125 {
  margin-left: 125px !important;
  margin-right: 125px !important;
}

.my-125 {
  margin-top: 125px !important;
  margin-bottom: 125px !important;
}

.pt-125 {
  padding-top: 125px !important;
}

.pb-125 {
  padding-bottom: 125px !important;
}

.pr-125 {
  padding-right: 125px !important;
}

.pl-125 {
  padding-left: 125px !important;
}

.px-125 {
  padding-left: 125px !important;
  padding-right: 125px !important;
}

.py-125 {
  padding-top: 125px !important;
  padding-bottom: 125px !important;
}

.p-125 {
  padding: 125px !important;
}

.m-125 {
  margin: 125px !important;
}

.w-125 {
  width: 125%!important;
}

.lb-rounded-126 {
  border-bottom-left-radius: 126px !important;
}

.minh-126 {
  min-height: 126px !important;
}

.rb-rounded-126 {
  border-bottom-right-radius: 126px !important;
}

.lt-rounded-126 {
  border-top-left-radius: 126px !important;
}

.rt-rounded-126 {
  border-top-right-radius: 126px !important;
}

.mt-126 {
  margin-top: 126px !important;
}

.mb-126 {
  margin-bottom: 126px !important;
}

.mr-126 {
  margin-right: 126px !important;
}

.ml-126 {
  margin-left: 126px !important;
}

.mx-126 {
  margin-left: 126px !important;
  margin-right: 126px !important;
}

.my-126 {
  margin-top: 126px !important;
  margin-bottom: 126px !important;
}

.pt-126 {
  padding-top: 126px !important;
}

.pb-126 {
  padding-bottom: 126px !important;
}

.pr-126 {
  padding-right: 126px !important;
}

.pl-126 {
  padding-left: 126px !important;
}

.px-126 {
  padding-left: 126px !important;
  padding-right: 126px !important;
}

.py-126 {
  padding-top: 126px !important;
  padding-bottom: 126px !important;
}

.p-126 {
  padding: 126px !important;
}

.m-126 {
  margin: 126px !important;
}

.w-126 {
  width: 126%!important;
}

.lb-rounded-127 {
  border-bottom-left-radius: 127px !important;
}

.minh-127 {
  min-height: 127px !important;
}

.rb-rounded-127 {
  border-bottom-right-radius: 127px !important;
}

.lt-rounded-127 {
  border-top-left-radius: 127px !important;
}

.rt-rounded-127 {
  border-top-right-radius: 127px !important;
}

.mt-127 {
  margin-top: 127px !important;
}

.mb-127 {
  margin-bottom: 127px !important;
}

.mr-127 {
  margin-right: 127px !important;
}

.ml-127 {
  margin-left: 127px !important;
}

.mx-127 {
  margin-left: 127px !important;
  margin-right: 127px !important;
}

.my-127 {
  margin-top: 127px !important;
  margin-bottom: 127px !important;
}

.pt-127 {
  padding-top: 127px !important;
}

.pb-127 {
  padding-bottom: 127px !important;
}

.pr-127 {
  padding-right: 127px !important;
}

.pl-127 {
  padding-left: 127px !important;
}

.px-127 {
  padding-left: 127px !important;
  padding-right: 127px !important;
}

.py-127 {
  padding-top: 127px !important;
  padding-bottom: 127px !important;
}

.p-127 {
  padding: 127px !important;
}

.m-127 {
  margin: 127px !important;
}

.w-127 {
  width: 127%!important;
}

.lb-rounded-128 {
  border-bottom-left-radius: 128px !important;
}

.minh-128 {
  min-height: 128px !important;
}

.rb-rounded-128 {
  border-bottom-right-radius: 128px !important;
}

.lt-rounded-128 {
  border-top-left-radius: 128px !important;
}

.rt-rounded-128 {
  border-top-right-radius: 128px !important;
}

.mt-128 {
  margin-top: 128px !important;
}

.mb-128 {
  margin-bottom: 128px !important;
}

.mr-128 {
  margin-right: 128px !important;
}

.ml-128 {
  margin-left: 128px !important;
}

.mx-128 {
  margin-left: 128px !important;
  margin-right: 128px !important;
}

.my-128 {
  margin-top: 128px !important;
  margin-bottom: 128px !important;
}

.pt-128 {
  padding-top: 128px !important;
}

.pb-128 {
  padding-bottom: 128px !important;
}

.pr-128 {
  padding-right: 128px !important;
}

.pl-128 {
  padding-left: 128px !important;
}

.px-128 {
  padding-left: 128px !important;
  padding-right: 128px !important;
}

.py-128 {
  padding-top: 128px !important;
  padding-bottom: 128px !important;
}

.p-128 {
  padding: 128px !important;
}

.m-128 {
  margin: 128px !important;
}

.w-128 {
  width: 128%!important;
}

.lb-rounded-129 {
  border-bottom-left-radius: 129px !important;
}

.minh-129 {
  min-height: 129px !important;
}

.rb-rounded-129 {
  border-bottom-right-radius: 129px !important;
}

.lt-rounded-129 {
  border-top-left-radius: 129px !important;
}

.rt-rounded-129 {
  border-top-right-radius: 129px !important;
}

.mt-129 {
  margin-top: 129px !important;
}

.mb-129 {
  margin-bottom: 129px !important;
}

.mr-129 {
  margin-right: 129px !important;
}

.ml-129 {
  margin-left: 129px !important;
}

.mx-129 {
  margin-left: 129px !important;
  margin-right: 129px !important;
}

.my-129 {
  margin-top: 129px !important;
  margin-bottom: 129px !important;
}

.pt-129 {
  padding-top: 129px !important;
}

.pb-129 {
  padding-bottom: 129px !important;
}

.pr-129 {
  padding-right: 129px !important;
}

.pl-129 {
  padding-left: 129px !important;
}

.px-129 {
  padding-left: 129px !important;
  padding-right: 129px !important;
}

.py-129 {
  padding-top: 129px !important;
  padding-bottom: 129px !important;
}

.p-129 {
  padding: 129px !important;
}

.m-129 {
  margin: 129px !important;
}

.w-129 {
  width: 129%!important;
}

.lb-rounded-130 {
  border-bottom-left-radius: 130px !important;
}

.minh-130 {
  min-height: 130px !important;
}

.rb-rounded-130 {
  border-bottom-right-radius: 130px !important;
}

.lt-rounded-130 {
  border-top-left-radius: 130px !important;
}

.rt-rounded-130 {
  border-top-right-radius: 130px !important;
}

.mt-130 {
  margin-top: 130px !important;
}

.mb-130 {
  margin-bottom: 130px !important;
}

.mr-130 {
  margin-right: 130px !important;
}

.ml-130 {
  margin-left: 130px !important;
}

.mx-130 {
  margin-left: 130px !important;
  margin-right: 130px !important;
}

.my-130 {
  margin-top: 130px !important;
  margin-bottom: 130px !important;
}

.pt-130 {
  padding-top: 130px !important;
}

.pb-130 {
  padding-bottom: 130px !important;
}

.pr-130 {
  padding-right: 130px !important;
}

.pl-130 {
  padding-left: 130px !important;
}

.px-130 {
  padding-left: 130px !important;
  padding-right: 130px !important;
}

.py-130 {
  padding-top: 130px !important;
  padding-bottom: 130px !important;
}

.p-130 {
  padding: 130px !important;
}

.m-130 {
  margin: 130px !important;
}

.w-130 {
  width: 130%!important;
}

.lb-rounded-131 {
  border-bottom-left-radius: 131px !important;
}

.minh-131 {
  min-height: 131px !important;
}

.rb-rounded-131 {
  border-bottom-right-radius: 131px !important;
}

.lt-rounded-131 {
  border-top-left-radius: 131px !important;
}

.rt-rounded-131 {
  border-top-right-radius: 131px !important;
}

.mt-131 {
  margin-top: 131px !important;
}

.mb-131 {
  margin-bottom: 131px !important;
}

.mr-131 {
  margin-right: 131px !important;
}

.ml-131 {
  margin-left: 131px !important;
}

.mx-131 {
  margin-left: 131px !important;
  margin-right: 131px !important;
}

.my-131 {
  margin-top: 131px !important;
  margin-bottom: 131px !important;
}

.pt-131 {
  padding-top: 131px !important;
}

.pb-131 {
  padding-bottom: 131px !important;
}

.pr-131 {
  padding-right: 131px !important;
}

.pl-131 {
  padding-left: 131px !important;
}

.px-131 {
  padding-left: 131px !important;
  padding-right: 131px !important;
}

.py-131 {
  padding-top: 131px !important;
  padding-bottom: 131px !important;
}

.p-131 {
  padding: 131px !important;
}

.m-131 {
  margin: 131px !important;
}

.w-131 {
  width: 131%!important;
}

.lb-rounded-132 {
  border-bottom-left-radius: 132px !important;
}

.minh-132 {
  min-height: 132px !important;
}

.rb-rounded-132 {
  border-bottom-right-radius: 132px !important;
}

.lt-rounded-132 {
  border-top-left-radius: 132px !important;
}

.rt-rounded-132 {
  border-top-right-radius: 132px !important;
}

.mt-132 {
  margin-top: 132px !important;
}

.mb-132 {
  margin-bottom: 132px !important;
}

.mr-132 {
  margin-right: 132px !important;
}

.ml-132 {
  margin-left: 132px !important;
}

.mx-132 {
  margin-left: 132px !important;
  margin-right: 132px !important;
}

.my-132 {
  margin-top: 132px !important;
  margin-bottom: 132px !important;
}

.pt-132 {
  padding-top: 132px !important;
}

.pb-132 {
  padding-bottom: 132px !important;
}

.pr-132 {
  padding-right: 132px !important;
}

.pl-132 {
  padding-left: 132px !important;
}

.px-132 {
  padding-left: 132px !important;
  padding-right: 132px !important;
}

.py-132 {
  padding-top: 132px !important;
  padding-bottom: 132px !important;
}

.p-132 {
  padding: 132px !important;
}

.m-132 {
  margin: 132px !important;
}

.w-132 {
  width: 132%!important;
}

.lb-rounded-133 {
  border-bottom-left-radius: 133px !important;
}

.minh-133 {
  min-height: 133px !important;
}

.rb-rounded-133 {
  border-bottom-right-radius: 133px !important;
}

.lt-rounded-133 {
  border-top-left-radius: 133px !important;
}

.rt-rounded-133 {
  border-top-right-radius: 133px !important;
}

.mt-133 {
  margin-top: 133px !important;
}

.mb-133 {
  margin-bottom: 133px !important;
}

.mr-133 {
  margin-right: 133px !important;
}

.ml-133 {
  margin-left: 133px !important;
}

.mx-133 {
  margin-left: 133px !important;
  margin-right: 133px !important;
}

.my-133 {
  margin-top: 133px !important;
  margin-bottom: 133px !important;
}

.pt-133 {
  padding-top: 133px !important;
}

.pb-133 {
  padding-bottom: 133px !important;
}

.pr-133 {
  padding-right: 133px !important;
}

.pl-133 {
  padding-left: 133px !important;
}

.px-133 {
  padding-left: 133px !important;
  padding-right: 133px !important;
}

.py-133 {
  padding-top: 133px !important;
  padding-bottom: 133px !important;
}

.p-133 {
  padding: 133px !important;
}

.m-133 {
  margin: 133px !important;
}

.w-133 {
  width: 133%!important;
}

.lb-rounded-134 {
  border-bottom-left-radius: 134px !important;
}

.minh-134 {
  min-height: 134px !important;
}

.rb-rounded-134 {
  border-bottom-right-radius: 134px !important;
}

.lt-rounded-134 {
  border-top-left-radius: 134px !important;
}

.rt-rounded-134 {
  border-top-right-radius: 134px !important;
}

.mt-134 {
  margin-top: 134px !important;
}

.mb-134 {
  margin-bottom: 134px !important;
}

.mr-134 {
  margin-right: 134px !important;
}

.ml-134 {
  margin-left: 134px !important;
}

.mx-134 {
  margin-left: 134px !important;
  margin-right: 134px !important;
}

.my-134 {
  margin-top: 134px !important;
  margin-bottom: 134px !important;
}

.pt-134 {
  padding-top: 134px !important;
}

.pb-134 {
  padding-bottom: 134px !important;
}

.pr-134 {
  padding-right: 134px !important;
}

.pl-134 {
  padding-left: 134px !important;
}

.px-134 {
  padding-left: 134px !important;
  padding-right: 134px !important;
}

.py-134 {
  padding-top: 134px !important;
  padding-bottom: 134px !important;
}

.p-134 {
  padding: 134px !important;
}

.m-134 {
  margin: 134px !important;
}

.w-134 {
  width: 134%!important;
}

.lb-rounded-135 {
  border-bottom-left-radius: 135px !important;
}

.minh-135 {
  min-height: 135px !important;
}

.rb-rounded-135 {
  border-bottom-right-radius: 135px !important;
}

.lt-rounded-135 {
  border-top-left-radius: 135px !important;
}

.rt-rounded-135 {
  border-top-right-radius: 135px !important;
}

.mt-135 {
  margin-top: 135px !important;
}

.mb-135 {
  margin-bottom: 135px !important;
}

.mr-135 {
  margin-right: 135px !important;
}

.ml-135 {
  margin-left: 135px !important;
}

.mx-135 {
  margin-left: 135px !important;
  margin-right: 135px !important;
}

.my-135 {
  margin-top: 135px !important;
  margin-bottom: 135px !important;
}

.pt-135 {
  padding-top: 135px !important;
}

.pb-135 {
  padding-bottom: 135px !important;
}

.pr-135 {
  padding-right: 135px !important;
}

.pl-135 {
  padding-left: 135px !important;
}

.px-135 {
  padding-left: 135px !important;
  padding-right: 135px !important;
}

.py-135 {
  padding-top: 135px !important;
  padding-bottom: 135px !important;
}

.p-135 {
  padding: 135px !important;
}

.m-135 {
  margin: 135px !important;
}

.w-135 {
  width: 135%!important;
}

.lb-rounded-136 {
  border-bottom-left-radius: 136px !important;
}

.minh-136 {
  min-height: 136px !important;
}

.rb-rounded-136 {
  border-bottom-right-radius: 136px !important;
}

.lt-rounded-136 {
  border-top-left-radius: 136px !important;
}

.rt-rounded-136 {
  border-top-right-radius: 136px !important;
}

.mt-136 {
  margin-top: 136px !important;
}

.mb-136 {
  margin-bottom: 136px !important;
}

.mr-136 {
  margin-right: 136px !important;
}

.ml-136 {
  margin-left: 136px !important;
}

.mx-136 {
  margin-left: 136px !important;
  margin-right: 136px !important;
}

.my-136 {
  margin-top: 136px !important;
  margin-bottom: 136px !important;
}

.pt-136 {
  padding-top: 136px !important;
}

.pb-136 {
  padding-bottom: 136px !important;
}

.pr-136 {
  padding-right: 136px !important;
}

.pl-136 {
  padding-left: 136px !important;
}

.px-136 {
  padding-left: 136px !important;
  padding-right: 136px !important;
}

.py-136 {
  padding-top: 136px !important;
  padding-bottom: 136px !important;
}

.p-136 {
  padding: 136px !important;
}

.m-136 {
  margin: 136px !important;
}

.w-136 {
  width: 136%!important;
}

.lb-rounded-137 {
  border-bottom-left-radius: 137px !important;
}

.minh-137 {
  min-height: 137px !important;
}

.rb-rounded-137 {
  border-bottom-right-radius: 137px !important;
}

.lt-rounded-137 {
  border-top-left-radius: 137px !important;
}

.rt-rounded-137 {
  border-top-right-radius: 137px !important;
}

.mt-137 {
  margin-top: 137px !important;
}

.mb-137 {
  margin-bottom: 137px !important;
}

.mr-137 {
  margin-right: 137px !important;
}

.ml-137 {
  margin-left: 137px !important;
}

.mx-137 {
  margin-left: 137px !important;
  margin-right: 137px !important;
}

.my-137 {
  margin-top: 137px !important;
  margin-bottom: 137px !important;
}

.pt-137 {
  padding-top: 137px !important;
}

.pb-137 {
  padding-bottom: 137px !important;
}

.pr-137 {
  padding-right: 137px !important;
}

.pl-137 {
  padding-left: 137px !important;
}

.px-137 {
  padding-left: 137px !important;
  padding-right: 137px !important;
}

.py-137 {
  padding-top: 137px !important;
  padding-bottom: 137px !important;
}

.p-137 {
  padding: 137px !important;
}

.m-137 {
  margin: 137px !important;
}

.w-137 {
  width: 137%!important;
}

.lb-rounded-138 {
  border-bottom-left-radius: 138px !important;
}

.minh-138 {
  min-height: 138px !important;
}

.rb-rounded-138 {
  border-bottom-right-radius: 138px !important;
}

.lt-rounded-138 {
  border-top-left-radius: 138px !important;
}

.rt-rounded-138 {
  border-top-right-radius: 138px !important;
}

.mt-138 {
  margin-top: 138px !important;
}

.mb-138 {
  margin-bottom: 138px !important;
}

.mr-138 {
  margin-right: 138px !important;
}

.ml-138 {
  margin-left: 138px !important;
}

.mx-138 {
  margin-left: 138px !important;
  margin-right: 138px !important;
}

.my-138 {
  margin-top: 138px !important;
  margin-bottom: 138px !important;
}

.pt-138 {
  padding-top: 138px !important;
}

.pb-138 {
  padding-bottom: 138px !important;
}

.pr-138 {
  padding-right: 138px !important;
}

.pl-138 {
  padding-left: 138px !important;
}

.px-138 {
  padding-left: 138px !important;
  padding-right: 138px !important;
}

.py-138 {
  padding-top: 138px !important;
  padding-bottom: 138px !important;
}

.p-138 {
  padding: 138px !important;
}

.m-138 {
  margin: 138px !important;
}

.w-138 {
  width: 138%!important;
}

.lb-rounded-139 {
  border-bottom-left-radius: 139px !important;
}

.minh-139 {
  min-height: 139px !important;
}

.rb-rounded-139 {
  border-bottom-right-radius: 139px !important;
}

.lt-rounded-139 {
  border-top-left-radius: 139px !important;
}

.rt-rounded-139 {
  border-top-right-radius: 139px !important;
}

.mt-139 {
  margin-top: 139px !important;
}

.mb-139 {
  margin-bottom: 139px !important;
}

.mr-139 {
  margin-right: 139px !important;
}

.ml-139 {
  margin-left: 139px !important;
}

.mx-139 {
  margin-left: 139px !important;
  margin-right: 139px !important;
}

.my-139 {
  margin-top: 139px !important;
  margin-bottom: 139px !important;
}

.pt-139 {
  padding-top: 139px !important;
}

.pb-139 {
  padding-bottom: 139px !important;
}

.pr-139 {
  padding-right: 139px !important;
}

.pl-139 {
  padding-left: 139px !important;
}

.px-139 {
  padding-left: 139px !important;
  padding-right: 139px !important;
}

.py-139 {
  padding-top: 139px !important;
  padding-bottom: 139px !important;
}

.p-139 {
  padding: 139px !important;
}

.m-139 {
  margin: 139px !important;
}

.w-139 {
  width: 139%!important;
}

.lb-rounded-140 {
  border-bottom-left-radius: 140px !important;
}

.minh-140 {
  min-height: 140px !important;
}

.rb-rounded-140 {
  border-bottom-right-radius: 140px !important;
}

.lt-rounded-140 {
  border-top-left-radius: 140px !important;
}

.rt-rounded-140 {
  border-top-right-radius: 140px !important;
}

.mt-140 {
  margin-top: 140px !important;
}

.mb-140 {
  margin-bottom: 140px !important;
}

.mr-140 {
  margin-right: 140px !important;
}

.ml-140 {
  margin-left: 140px !important;
}

.mx-140 {
  margin-left: 140px !important;
  margin-right: 140px !important;
}

.my-140 {
  margin-top: 140px !important;
  margin-bottom: 140px !important;
}

.pt-140 {
  padding-top: 140px !important;
}

.pb-140 {
  padding-bottom: 140px !important;
}

.pr-140 {
  padding-right: 140px !important;
}

.pl-140 {
  padding-left: 140px !important;
}

.px-140 {
  padding-left: 140px !important;
  padding-right: 140px !important;
}

.py-140 {
  padding-top: 140px !important;
  padding-bottom: 140px !important;
}

.p-140 {
  padding: 140px !important;
}

.m-140 {
  margin: 140px !important;
}

.w-140 {
  width: 140%!important;
}

.lb-rounded-141 {
  border-bottom-left-radius: 141px !important;
}

.minh-141 {
  min-height: 141px !important;
}

.rb-rounded-141 {
  border-bottom-right-radius: 141px !important;
}

.lt-rounded-141 {
  border-top-left-radius: 141px !important;
}

.rt-rounded-141 {
  border-top-right-radius: 141px !important;
}

.mt-141 {
  margin-top: 141px !important;
}

.mb-141 {
  margin-bottom: 141px !important;
}

.mr-141 {
  margin-right: 141px !important;
}

.ml-141 {
  margin-left: 141px !important;
}

.mx-141 {
  margin-left: 141px !important;
  margin-right: 141px !important;
}

.my-141 {
  margin-top: 141px !important;
  margin-bottom: 141px !important;
}

.pt-141 {
  padding-top: 141px !important;
}

.pb-141 {
  padding-bottom: 141px !important;
}

.pr-141 {
  padding-right: 141px !important;
}

.pl-141 {
  padding-left: 141px !important;
}

.px-141 {
  padding-left: 141px !important;
  padding-right: 141px !important;
}

.py-141 {
  padding-top: 141px !important;
  padding-bottom: 141px !important;
}

.p-141 {
  padding: 141px !important;
}

.m-141 {
  margin: 141px !important;
}

.w-141 {
  width: 141%!important;
}

.lb-rounded-142 {
  border-bottom-left-radius: 142px !important;
}

.minh-142 {
  min-height: 142px !important;
}

.rb-rounded-142 {
  border-bottom-right-radius: 142px !important;
}

.lt-rounded-142 {
  border-top-left-radius: 142px !important;
}

.rt-rounded-142 {
  border-top-right-radius: 142px !important;
}

.mt-142 {
  margin-top: 142px !important;
}

.mb-142 {
  margin-bottom: 142px !important;
}

.mr-142 {
  margin-right: 142px !important;
}

.ml-142 {
  margin-left: 142px !important;
}

.mx-142 {
  margin-left: 142px !important;
  margin-right: 142px !important;
}

.my-142 {
  margin-top: 142px !important;
  margin-bottom: 142px !important;
}

.pt-142 {
  padding-top: 142px !important;
}

.pb-142 {
  padding-bottom: 142px !important;
}

.pr-142 {
  padding-right: 142px !important;
}

.pl-142 {
  padding-left: 142px !important;
}

.px-142 {
  padding-left: 142px !important;
  padding-right: 142px !important;
}

.py-142 {
  padding-top: 142px !important;
  padding-bottom: 142px !important;
}

.p-142 {
  padding: 142px !important;
}

.m-142 {
  margin: 142px !important;
}

.w-142 {
  width: 142%!important;
}

.lb-rounded-143 {
  border-bottom-left-radius: 143px !important;
}

.minh-143 {
  min-height: 143px !important;
}

.rb-rounded-143 {
  border-bottom-right-radius: 143px !important;
}

.lt-rounded-143 {
  border-top-left-radius: 143px !important;
}

.rt-rounded-143 {
  border-top-right-radius: 143px !important;
}

.mt-143 {
  margin-top: 143px !important;
}

.mb-143 {
  margin-bottom: 143px !important;
}

.mr-143 {
  margin-right: 143px !important;
}

.ml-143 {
  margin-left: 143px !important;
}

.mx-143 {
  margin-left: 143px !important;
  margin-right: 143px !important;
}

.my-143 {
  margin-top: 143px !important;
  margin-bottom: 143px !important;
}

.pt-143 {
  padding-top: 143px !important;
}

.pb-143 {
  padding-bottom: 143px !important;
}

.pr-143 {
  padding-right: 143px !important;
}

.pl-143 {
  padding-left: 143px !important;
}

.px-143 {
  padding-left: 143px !important;
  padding-right: 143px !important;
}

.py-143 {
  padding-top: 143px !important;
  padding-bottom: 143px !important;
}

.p-143 {
  padding: 143px !important;
}

.m-143 {
  margin: 143px !important;
}

.w-143 {
  width: 143%!important;
}

.lb-rounded-144 {
  border-bottom-left-radius: 144px !important;
}

.minh-144 {
  min-height: 144px !important;
}

.rb-rounded-144 {
  border-bottom-right-radius: 144px !important;
}

.lt-rounded-144 {
  border-top-left-radius: 144px !important;
}

.rt-rounded-144 {
  border-top-right-radius: 144px !important;
}

.mt-144 {
  margin-top: 144px !important;
}

.mb-144 {
  margin-bottom: 144px !important;
}

.mr-144 {
  margin-right: 144px !important;
}

.ml-144 {
  margin-left: 144px !important;
}

.mx-144 {
  margin-left: 144px !important;
  margin-right: 144px !important;
}

.my-144 {
  margin-top: 144px !important;
  margin-bottom: 144px !important;
}

.pt-144 {
  padding-top: 144px !important;
}

.pb-144 {
  padding-bottom: 144px !important;
}

.pr-144 {
  padding-right: 144px !important;
}

.pl-144 {
  padding-left: 144px !important;
}

.px-144 {
  padding-left: 144px !important;
  padding-right: 144px !important;
}

.py-144 {
  padding-top: 144px !important;
  padding-bottom: 144px !important;
}

.p-144 {
  padding: 144px !important;
}

.m-144 {
  margin: 144px !important;
}

.w-144 {
  width: 144%!important;
}

.lb-rounded-145 {
  border-bottom-left-radius: 145px !important;
}

.minh-145 {
  min-height: 145px !important;
}

.rb-rounded-145 {
  border-bottom-right-radius: 145px !important;
}

.lt-rounded-145 {
  border-top-left-radius: 145px !important;
}

.rt-rounded-145 {
  border-top-right-radius: 145px !important;
}

.mt-145 {
  margin-top: 145px !important;
}

.mb-145 {
  margin-bottom: 145px !important;
}

.mr-145 {
  margin-right: 145px !important;
}

.ml-145 {
  margin-left: 145px !important;
}

.mx-145 {
  margin-left: 145px !important;
  margin-right: 145px !important;
}

.my-145 {
  margin-top: 145px !important;
  margin-bottom: 145px !important;
}

.pt-145 {
  padding-top: 145px !important;
}

.pb-145 {
  padding-bottom: 145px !important;
}

.pr-145 {
  padding-right: 145px !important;
}

.pl-145 {
  padding-left: 145px !important;
}

.px-145 {
  padding-left: 145px !important;
  padding-right: 145px !important;
}

.py-145 {
  padding-top: 145px !important;
  padding-bottom: 145px !important;
}

.p-145 {
  padding: 145px !important;
}

.m-145 {
  margin: 145px !important;
}

.w-145 {
  width: 145%!important;
}

.lb-rounded-146 {
  border-bottom-left-radius: 146px !important;
}

.minh-146 {
  min-height: 146px !important;
}

.rb-rounded-146 {
  border-bottom-right-radius: 146px !important;
}

.lt-rounded-146 {
  border-top-left-radius: 146px !important;
}

.rt-rounded-146 {
  border-top-right-radius: 146px !important;
}

.mt-146 {
  margin-top: 146px !important;
}

.mb-146 {
  margin-bottom: 146px !important;
}

.mr-146 {
  margin-right: 146px !important;
}

.ml-146 {
  margin-left: 146px !important;
}

.mx-146 {
  margin-left: 146px !important;
  margin-right: 146px !important;
}

.my-146 {
  margin-top: 146px !important;
  margin-bottom: 146px !important;
}

.pt-146 {
  padding-top: 146px !important;
}

.pb-146 {
  padding-bottom: 146px !important;
}

.pr-146 {
  padding-right: 146px !important;
}

.pl-146 {
  padding-left: 146px !important;
}

.px-146 {
  padding-left: 146px !important;
  padding-right: 146px !important;
}

.py-146 {
  padding-top: 146px !important;
  padding-bottom: 146px !important;
}

.p-146 {
  padding: 146px !important;
}

.m-146 {
  margin: 146px !important;
}

.w-146 {
  width: 146%!important;
}

.lb-rounded-147 {
  border-bottom-left-radius: 147px !important;
}

.minh-147 {
  min-height: 147px !important;
}

.rb-rounded-147 {
  border-bottom-right-radius: 147px !important;
}

.lt-rounded-147 {
  border-top-left-radius: 147px !important;
}

.rt-rounded-147 {
  border-top-right-radius: 147px !important;
}

.mt-147 {
  margin-top: 147px !important;
}

.mb-147 {
  margin-bottom: 147px !important;
}

.mr-147 {
  margin-right: 147px !important;
}

.ml-147 {
  margin-left: 147px !important;
}

.mx-147 {
  margin-left: 147px !important;
  margin-right: 147px !important;
}

.my-147 {
  margin-top: 147px !important;
  margin-bottom: 147px !important;
}

.pt-147 {
  padding-top: 147px !important;
}

.pb-147 {
  padding-bottom: 147px !important;
}

.pr-147 {
  padding-right: 147px !important;
}

.pl-147 {
  padding-left: 147px !important;
}

.px-147 {
  padding-left: 147px !important;
  padding-right: 147px !important;
}

.py-147 {
  padding-top: 147px !important;
  padding-bottom: 147px !important;
}

.p-147 {
  padding: 147px !important;
}

.m-147 {
  margin: 147px !important;
}

.w-147 {
  width: 147%!important;
}

.lb-rounded-148 {
  border-bottom-left-radius: 148px !important;
}

.minh-148 {
  min-height: 148px !important;
}

.rb-rounded-148 {
  border-bottom-right-radius: 148px !important;
}

.lt-rounded-148 {
  border-top-left-radius: 148px !important;
}

.rt-rounded-148 {
  border-top-right-radius: 148px !important;
}

.mt-148 {
  margin-top: 148px !important;
}

.mb-148 {
  margin-bottom: 148px !important;
}

.mr-148 {
  margin-right: 148px !important;
}

.ml-148 {
  margin-left: 148px !important;
}

.mx-148 {
  margin-left: 148px !important;
  margin-right: 148px !important;
}

.my-148 {
  margin-top: 148px !important;
  margin-bottom: 148px !important;
}

.pt-148 {
  padding-top: 148px !important;
}

.pb-148 {
  padding-bottom: 148px !important;
}

.pr-148 {
  padding-right: 148px !important;
}

.pl-148 {
  padding-left: 148px !important;
}

.px-148 {
  padding-left: 148px !important;
  padding-right: 148px !important;
}

.py-148 {
  padding-top: 148px !important;
  padding-bottom: 148px !important;
}

.p-148 {
  padding: 148px !important;
}

.m-148 {
  margin: 148px !important;
}

.w-148 {
  width: 148%!important;
}

.lb-rounded-149 {
  border-bottom-left-radius: 149px !important;
}

.minh-149 {
  min-height: 149px !important;
}

.rb-rounded-149 {
  border-bottom-right-radius: 149px !important;
}

.lt-rounded-149 {
  border-top-left-radius: 149px !important;
}

.rt-rounded-149 {
  border-top-right-radius: 149px !important;
}

.mt-149 {
  margin-top: 149px !important;
}

.mb-149 {
  margin-bottom: 149px !important;
}

.mr-149 {
  margin-right: 149px !important;
}

.ml-149 {
  margin-left: 149px !important;
}

.mx-149 {
  margin-left: 149px !important;
  margin-right: 149px !important;
}

.my-149 {
  margin-top: 149px !important;
  margin-bottom: 149px !important;
}

.pt-149 {
  padding-top: 149px !important;
}

.pb-149 {
  padding-bottom: 149px !important;
}

.pr-149 {
  padding-right: 149px !important;
}

.pl-149 {
  padding-left: 149px !important;
}

.px-149 {
  padding-left: 149px !important;
  padding-right: 149px !important;
}

.py-149 {
  padding-top: 149px !important;
  padding-bottom: 149px !important;
}

.p-149 {
  padding: 149px !important;
}

.m-149 {
  margin: 149px !important;
}

.w-149 {
  width: 149%!important;
}

.lb-rounded-150 {
  border-bottom-left-radius: 150px !important;
}

.minh-150 {
  min-height: 150px !important;
}

.rb-rounded-150 {
  border-bottom-right-radius: 150px !important;
}

.lt-rounded-150 {
  border-top-left-radius: 150px !important;
}

.rt-rounded-150 {
  border-top-right-radius: 150px !important;
}

.mt-150 {
  margin-top: 150px !important;
}

.mb-150 {
  margin-bottom: 150px !important;
}

.mr-150 {
  margin-right: 150px !important;
}

.ml-150 {
  margin-left: 150px !important;
}

.mx-150 {
  margin-left: 150px !important;
  margin-right: 150px !important;
}

.my-150 {
  margin-top: 150px !important;
  margin-bottom: 150px !important;
}

.pt-150 {
  padding-top: 150px !important;
}

.pb-150 {
  padding-bottom: 150px !important;
}

.pr-150 {
  padding-right: 150px !important;
}

.pl-150 {
  padding-left: 150px !important;
}

.px-150 {
  padding-left: 150px !important;
  padding-right: 150px !important;
}

.py-150 {
  padding-top: 150px !important;
  padding-bottom: 150px !important;
}

.p-150 {
  padding: 150px !important;
}

.m-150 {
  margin: 150px !important;
}

.w-150 {
  width: 150%!important;
}

.lb-rounded-151 {
  border-bottom-left-radius: 151px !important;
}

.minh-151 {
  min-height: 151px !important;
}

.rb-rounded-151 {
  border-bottom-right-radius: 151px !important;
}

.lt-rounded-151 {
  border-top-left-radius: 151px !important;
}

.rt-rounded-151 {
  border-top-right-radius: 151px !important;
}

.mt-151 {
  margin-top: 151px !important;
}

.mb-151 {
  margin-bottom: 151px !important;
}

.mr-151 {
  margin-right: 151px !important;
}

.ml-151 {
  margin-left: 151px !important;
}

.mx-151 {
  margin-left: 151px !important;
  margin-right: 151px !important;
}

.my-151 {
  margin-top: 151px !important;
  margin-bottom: 151px !important;
}

.pt-151 {
  padding-top: 151px !important;
}

.pb-151 {
  padding-bottom: 151px !important;
}

.pr-151 {
  padding-right: 151px !important;
}

.pl-151 {
  padding-left: 151px !important;
}

.px-151 {
  padding-left: 151px !important;
  padding-right: 151px !important;
}

.py-151 {
  padding-top: 151px !important;
  padding-bottom: 151px !important;
}

.p-151 {
  padding: 151px !important;
}

.m-151 {
  margin: 151px !important;
}

.w-151 {
  width: 151%!important;
}

.lb-rounded-152 {
  border-bottom-left-radius: 152px !important;
}

.minh-152 {
  min-height: 152px !important;
}

.rb-rounded-152 {
  border-bottom-right-radius: 152px !important;
}

.lt-rounded-152 {
  border-top-left-radius: 152px !important;
}

.rt-rounded-152 {
  border-top-right-radius: 152px !important;
}

.mt-152 {
  margin-top: 152px !important;
}

.mb-152 {
  margin-bottom: 152px !important;
}

.mr-152 {
  margin-right: 152px !important;
}

.ml-152 {
  margin-left: 152px !important;
}

.mx-152 {
  margin-left: 152px !important;
  margin-right: 152px !important;
}

.my-152 {
  margin-top: 152px !important;
  margin-bottom: 152px !important;
}

.pt-152 {
  padding-top: 152px !important;
}

.pb-152 {
  padding-bottom: 152px !important;
}

.pr-152 {
  padding-right: 152px !important;
}

.pl-152 {
  padding-left: 152px !important;
}

.px-152 {
  padding-left: 152px !important;
  padding-right: 152px !important;
}

.py-152 {
  padding-top: 152px !important;
  padding-bottom: 152px !important;
}

.p-152 {
  padding: 152px !important;
}

.m-152 {
  margin: 152px !important;
}

.w-152 {
  width: 152%!important;
}

.lb-rounded-153 {
  border-bottom-left-radius: 153px !important;
}

.minh-153 {
  min-height: 153px !important;
}

.rb-rounded-153 {
  border-bottom-right-radius: 153px !important;
}

.lt-rounded-153 {
  border-top-left-radius: 153px !important;
}

.rt-rounded-153 {
  border-top-right-radius: 153px !important;
}

.mt-153 {
  margin-top: 153px !important;
}

.mb-153 {
  margin-bottom: 153px !important;
}

.mr-153 {
  margin-right: 153px !important;
}

.ml-153 {
  margin-left: 153px !important;
}

.mx-153 {
  margin-left: 153px !important;
  margin-right: 153px !important;
}

.my-153 {
  margin-top: 153px !important;
  margin-bottom: 153px !important;
}

.pt-153 {
  padding-top: 153px !important;
}

.pb-153 {
  padding-bottom: 153px !important;
}

.pr-153 {
  padding-right: 153px !important;
}

.pl-153 {
  padding-left: 153px !important;
}

.px-153 {
  padding-left: 153px !important;
  padding-right: 153px !important;
}

.py-153 {
  padding-top: 153px !important;
  padding-bottom: 153px !important;
}

.p-153 {
  padding: 153px !important;
}

.m-153 {
  margin: 153px !important;
}

.w-153 {
  width: 153%!important;
}

.lb-rounded-154 {
  border-bottom-left-radius: 154px !important;
}

.minh-154 {
  min-height: 154px !important;
}

.rb-rounded-154 {
  border-bottom-right-radius: 154px !important;
}

.lt-rounded-154 {
  border-top-left-radius: 154px !important;
}

.rt-rounded-154 {
  border-top-right-radius: 154px !important;
}

.mt-154 {
  margin-top: 154px !important;
}

.mb-154 {
  margin-bottom: 154px !important;
}

.mr-154 {
  margin-right: 154px !important;
}

.ml-154 {
  margin-left: 154px !important;
}

.mx-154 {
  margin-left: 154px !important;
  margin-right: 154px !important;
}

.my-154 {
  margin-top: 154px !important;
  margin-bottom: 154px !important;
}

.pt-154 {
  padding-top: 154px !important;
}

.pb-154 {
  padding-bottom: 154px !important;
}

.pr-154 {
  padding-right: 154px !important;
}

.pl-154 {
  padding-left: 154px !important;
}

.px-154 {
  padding-left: 154px !important;
  padding-right: 154px !important;
}

.py-154 {
  padding-top: 154px !important;
  padding-bottom: 154px !important;
}

.p-154 {
  padding: 154px !important;
}

.m-154 {
  margin: 154px !important;
}

.w-154 {
  width: 154%!important;
}

.lb-rounded-155 {
  border-bottom-left-radius: 155px !important;
}

.minh-155 {
  min-height: 155px !important;
}

.rb-rounded-155 {
  border-bottom-right-radius: 155px !important;
}

.lt-rounded-155 {
  border-top-left-radius: 155px !important;
}

.rt-rounded-155 {
  border-top-right-radius: 155px !important;
}

.mt-155 {
  margin-top: 155px !important;
}

.mb-155 {
  margin-bottom: 155px !important;
}

.mr-155 {
  margin-right: 155px !important;
}

.ml-155 {
  margin-left: 155px !important;
}

.mx-155 {
  margin-left: 155px !important;
  margin-right: 155px !important;
}

.my-155 {
  margin-top: 155px !important;
  margin-bottom: 155px !important;
}

.pt-155 {
  padding-top: 155px !important;
}

.pb-155 {
  padding-bottom: 155px !important;
}

.pr-155 {
  padding-right: 155px !important;
}

.pl-155 {
  padding-left: 155px !important;
}

.px-155 {
  padding-left: 155px !important;
  padding-right: 155px !important;
}

.py-155 {
  padding-top: 155px !important;
  padding-bottom: 155px !important;
}

.p-155 {
  padding: 155px !important;
}

.m-155 {
  margin: 155px !important;
}

.w-155 {
  width: 155%!important;
}

.lb-rounded-156 {
  border-bottom-left-radius: 156px !important;
}

.minh-156 {
  min-height: 156px !important;
}

.rb-rounded-156 {
  border-bottom-right-radius: 156px !important;
}

.lt-rounded-156 {
  border-top-left-radius: 156px !important;
}

.rt-rounded-156 {
  border-top-right-radius: 156px !important;
}

.mt-156 {
  margin-top: 156px !important;
}

.mb-156 {
  margin-bottom: 156px !important;
}

.mr-156 {
  margin-right: 156px !important;
}

.ml-156 {
  margin-left: 156px !important;
}

.mx-156 {
  margin-left: 156px !important;
  margin-right: 156px !important;
}

.my-156 {
  margin-top: 156px !important;
  margin-bottom: 156px !important;
}

.pt-156 {
  padding-top: 156px !important;
}

.pb-156 {
  padding-bottom: 156px !important;
}

.pr-156 {
  padding-right: 156px !important;
}

.pl-156 {
  padding-left: 156px !important;
}

.px-156 {
  padding-left: 156px !important;
  padding-right: 156px !important;
}

.py-156 {
  padding-top: 156px !important;
  padding-bottom: 156px !important;
}

.p-156 {
  padding: 156px !important;
}

.m-156 {
  margin: 156px !important;
}

.w-156 {
  width: 156%!important;
}

.lb-rounded-157 {
  border-bottom-left-radius: 157px !important;
}

.minh-157 {
  min-height: 157px !important;
}

.rb-rounded-157 {
  border-bottom-right-radius: 157px !important;
}

.lt-rounded-157 {
  border-top-left-radius: 157px !important;
}

.rt-rounded-157 {
  border-top-right-radius: 157px !important;
}

.mt-157 {
  margin-top: 157px !important;
}

.mb-157 {
  margin-bottom: 157px !important;
}

.mr-157 {
  margin-right: 157px !important;
}

.ml-157 {
  margin-left: 157px !important;
}

.mx-157 {
  margin-left: 157px !important;
  margin-right: 157px !important;
}

.my-157 {
  margin-top: 157px !important;
  margin-bottom: 157px !important;
}

.pt-157 {
  padding-top: 157px !important;
}

.pb-157 {
  padding-bottom: 157px !important;
}

.pr-157 {
  padding-right: 157px !important;
}

.pl-157 {
  padding-left: 157px !important;
}

.px-157 {
  padding-left: 157px !important;
  padding-right: 157px !important;
}

.py-157 {
  padding-top: 157px !important;
  padding-bottom: 157px !important;
}

.p-157 {
  padding: 157px !important;
}

.m-157 {
  margin: 157px !important;
}

.w-157 {
  width: 157%!important;
}

.lb-rounded-158 {
  border-bottom-left-radius: 158px !important;
}

.minh-158 {
  min-height: 158px !important;
}

.rb-rounded-158 {
  border-bottom-right-radius: 158px !important;
}

.lt-rounded-158 {
  border-top-left-radius: 158px !important;
}

.rt-rounded-158 {
  border-top-right-radius: 158px !important;
}

.mt-158 {
  margin-top: 158px !important;
}

.mb-158 {
  margin-bottom: 158px !important;
}

.mr-158 {
  margin-right: 158px !important;
}

.ml-158 {
  margin-left: 158px !important;
}

.mx-158 {
  margin-left: 158px !important;
  margin-right: 158px !important;
}

.my-158 {
  margin-top: 158px !important;
  margin-bottom: 158px !important;
}

.pt-158 {
  padding-top: 158px !important;
}

.pb-158 {
  padding-bottom: 158px !important;
}

.pr-158 {
  padding-right: 158px !important;
}

.pl-158 {
  padding-left: 158px !important;
}

.px-158 {
  padding-left: 158px !important;
  padding-right: 158px !important;
}

.py-158 {
  padding-top: 158px !important;
  padding-bottom: 158px !important;
}

.p-158 {
  padding: 158px !important;
}

.m-158 {
  margin: 158px !important;
}

.w-158 {
  width: 158%!important;
}

.lb-rounded-159 {
  border-bottom-left-radius: 159px !important;
}

.minh-159 {
  min-height: 159px !important;
}

.rb-rounded-159 {
  border-bottom-right-radius: 159px !important;
}

.lt-rounded-159 {
  border-top-left-radius: 159px !important;
}

.rt-rounded-159 {
  border-top-right-radius: 159px !important;
}

.mt-159 {
  margin-top: 159px !important;
}

.mb-159 {
  margin-bottom: 159px !important;
}

.mr-159 {
  margin-right: 159px !important;
}

.ml-159 {
  margin-left: 159px !important;
}

.mx-159 {
  margin-left: 159px !important;
  margin-right: 159px !important;
}

.my-159 {
  margin-top: 159px !important;
  margin-bottom: 159px !important;
}

.pt-159 {
  padding-top: 159px !important;
}

.pb-159 {
  padding-bottom: 159px !important;
}

.pr-159 {
  padding-right: 159px !important;
}

.pl-159 {
  padding-left: 159px !important;
}

.px-159 {
  padding-left: 159px !important;
  padding-right: 159px !important;
}

.py-159 {
  padding-top: 159px !important;
  padding-bottom: 159px !important;
}

.p-159 {
  padding: 159px !important;
}

.m-159 {
  margin: 159px !important;
}

.w-159 {
  width: 159%!important;
}

.lb-rounded-160 {
  border-bottom-left-radius: 160px !important;
}

.minh-160 {
  min-height: 160px !important;
}

.rb-rounded-160 {
  border-bottom-right-radius: 160px !important;
}

.lt-rounded-160 {
  border-top-left-radius: 160px !important;
}

.rt-rounded-160 {
  border-top-right-radius: 160px !important;
}

.mt-160 {
  margin-top: 160px !important;
}

.mb-160 {
  margin-bottom: 160px !important;
}

.mr-160 {
  margin-right: 160px !important;
}

.ml-160 {
  margin-left: 160px !important;
}

.mx-160 {
  margin-left: 160px !important;
  margin-right: 160px !important;
}

.my-160 {
  margin-top: 160px !important;
  margin-bottom: 160px !important;
}

.pt-160 {
  padding-top: 160px !important;
}

.pb-160 {
  padding-bottom: 160px !important;
}

.pr-160 {
  padding-right: 160px !important;
}

.pl-160 {
  padding-left: 160px !important;
}

.px-160 {
  padding-left: 160px !important;
  padding-right: 160px !important;
}

.py-160 {
  padding-top: 160px !important;
  padding-bottom: 160px !important;
}

.p-160 {
  padding: 160px !important;
}

.m-160 {
  margin: 160px !important;
}

.w-160 {
  width: 160%!important;
}

.lb-rounded-161 {
  border-bottom-left-radius: 161px !important;
}

.minh-161 {
  min-height: 161px !important;
}

.rb-rounded-161 {
  border-bottom-right-radius: 161px !important;
}

.lt-rounded-161 {
  border-top-left-radius: 161px !important;
}

.rt-rounded-161 {
  border-top-right-radius: 161px !important;
}

.mt-161 {
  margin-top: 161px !important;
}

.mb-161 {
  margin-bottom: 161px !important;
}

.mr-161 {
  margin-right: 161px !important;
}

.ml-161 {
  margin-left: 161px !important;
}

.mx-161 {
  margin-left: 161px !important;
  margin-right: 161px !important;
}

.my-161 {
  margin-top: 161px !important;
  margin-bottom: 161px !important;
}

.pt-161 {
  padding-top: 161px !important;
}

.pb-161 {
  padding-bottom: 161px !important;
}

.pr-161 {
  padding-right: 161px !important;
}

.pl-161 {
  padding-left: 161px !important;
}

.px-161 {
  padding-left: 161px !important;
  padding-right: 161px !important;
}

.py-161 {
  padding-top: 161px !important;
  padding-bottom: 161px !important;
}

.p-161 {
  padding: 161px !important;
}

.m-161 {
  margin: 161px !important;
}

.w-161 {
  width: 161%!important;
}

.lb-rounded-162 {
  border-bottom-left-radius: 162px !important;
}

.minh-162 {
  min-height: 162px !important;
}

.rb-rounded-162 {
  border-bottom-right-radius: 162px !important;
}

.lt-rounded-162 {
  border-top-left-radius: 162px !important;
}

.rt-rounded-162 {
  border-top-right-radius: 162px !important;
}

.mt-162 {
  margin-top: 162px !important;
}

.mb-162 {
  margin-bottom: 162px !important;
}

.mr-162 {
  margin-right: 162px !important;
}

.ml-162 {
  margin-left: 162px !important;
}

.mx-162 {
  margin-left: 162px !important;
  margin-right: 162px !important;
}

.my-162 {
  margin-top: 162px !important;
  margin-bottom: 162px !important;
}

.pt-162 {
  padding-top: 162px !important;
}

.pb-162 {
  padding-bottom: 162px !important;
}

.pr-162 {
  padding-right: 162px !important;
}

.pl-162 {
  padding-left: 162px !important;
}

.px-162 {
  padding-left: 162px !important;
  padding-right: 162px !important;
}

.py-162 {
  padding-top: 162px !important;
  padding-bottom: 162px !important;
}

.p-162 {
  padding: 162px !important;
}

.m-162 {
  margin: 162px !important;
}

.w-162 {
  width: 162%!important;
}

.lb-rounded-163 {
  border-bottom-left-radius: 163px !important;
}

.minh-163 {
  min-height: 163px !important;
}

.rb-rounded-163 {
  border-bottom-right-radius: 163px !important;
}

.lt-rounded-163 {
  border-top-left-radius: 163px !important;
}

.rt-rounded-163 {
  border-top-right-radius: 163px !important;
}

.mt-163 {
  margin-top: 163px !important;
}

.mb-163 {
  margin-bottom: 163px !important;
}

.mr-163 {
  margin-right: 163px !important;
}

.ml-163 {
  margin-left: 163px !important;
}

.mx-163 {
  margin-left: 163px !important;
  margin-right: 163px !important;
}

.my-163 {
  margin-top: 163px !important;
  margin-bottom: 163px !important;
}

.pt-163 {
  padding-top: 163px !important;
}

.pb-163 {
  padding-bottom: 163px !important;
}

.pr-163 {
  padding-right: 163px !important;
}

.pl-163 {
  padding-left: 163px !important;
}

.px-163 {
  padding-left: 163px !important;
  padding-right: 163px !important;
}

.py-163 {
  padding-top: 163px !important;
  padding-bottom: 163px !important;
}

.p-163 {
  padding: 163px !important;
}

.m-163 {
  margin: 163px !important;
}

.w-163 {
  width: 163%!important;
}

.lb-rounded-164 {
  border-bottom-left-radius: 164px !important;
}

.minh-164 {
  min-height: 164px !important;
}

.rb-rounded-164 {
  border-bottom-right-radius: 164px !important;
}

.lt-rounded-164 {
  border-top-left-radius: 164px !important;
}

.rt-rounded-164 {
  border-top-right-radius: 164px !important;
}

.mt-164 {
  margin-top: 164px !important;
}

.mb-164 {
  margin-bottom: 164px !important;
}

.mr-164 {
  margin-right: 164px !important;
}

.ml-164 {
  margin-left: 164px !important;
}

.mx-164 {
  margin-left: 164px !important;
  margin-right: 164px !important;
}

.my-164 {
  margin-top: 164px !important;
  margin-bottom: 164px !important;
}

.pt-164 {
  padding-top: 164px !important;
}

.pb-164 {
  padding-bottom: 164px !important;
}

.pr-164 {
  padding-right: 164px !important;
}

.pl-164 {
  padding-left: 164px !important;
}

.px-164 {
  padding-left: 164px !important;
  padding-right: 164px !important;
}

.py-164 {
  padding-top: 164px !important;
  padding-bottom: 164px !important;
}

.p-164 {
  padding: 164px !important;
}

.m-164 {
  margin: 164px !important;
}

.w-164 {
  width: 164%!important;
}

.lb-rounded-165 {
  border-bottom-left-radius: 165px !important;
}

.minh-165 {
  min-height: 165px !important;
}

.rb-rounded-165 {
  border-bottom-right-radius: 165px !important;
}

.lt-rounded-165 {
  border-top-left-radius: 165px !important;
}

.rt-rounded-165 {
  border-top-right-radius: 165px !important;
}

.mt-165 {
  margin-top: 165px !important;
}

.mb-165 {
  margin-bottom: 165px !important;
}

.mr-165 {
  margin-right: 165px !important;
}

.ml-165 {
  margin-left: 165px !important;
}

.mx-165 {
  margin-left: 165px !important;
  margin-right: 165px !important;
}

.my-165 {
  margin-top: 165px !important;
  margin-bottom: 165px !important;
}

.pt-165 {
  padding-top: 165px !important;
}

.pb-165 {
  padding-bottom: 165px !important;
}

.pr-165 {
  padding-right: 165px !important;
}

.pl-165 {
  padding-left: 165px !important;
}

.px-165 {
  padding-left: 165px !important;
  padding-right: 165px !important;
}

.py-165 {
  padding-top: 165px !important;
  padding-bottom: 165px !important;
}

.p-165 {
  padding: 165px !important;
}

.m-165 {
  margin: 165px !important;
}

.w-165 {
  width: 165%!important;
}

.lb-rounded-166 {
  border-bottom-left-radius: 166px !important;
}

.minh-166 {
  min-height: 166px !important;
}

.rb-rounded-166 {
  border-bottom-right-radius: 166px !important;
}

.lt-rounded-166 {
  border-top-left-radius: 166px !important;
}

.rt-rounded-166 {
  border-top-right-radius: 166px !important;
}

.mt-166 {
  margin-top: 166px !important;
}

.mb-166 {
  margin-bottom: 166px !important;
}

.mr-166 {
  margin-right: 166px !important;
}

.ml-166 {
  margin-left: 166px !important;
}

.mx-166 {
  margin-left: 166px !important;
  margin-right: 166px !important;
}

.my-166 {
  margin-top: 166px !important;
  margin-bottom: 166px !important;
}

.pt-166 {
  padding-top: 166px !important;
}

.pb-166 {
  padding-bottom: 166px !important;
}

.pr-166 {
  padding-right: 166px !important;
}

.pl-166 {
  padding-left: 166px !important;
}

.px-166 {
  padding-left: 166px !important;
  padding-right: 166px !important;
}

.py-166 {
  padding-top: 166px !important;
  padding-bottom: 166px !important;
}

.p-166 {
  padding: 166px !important;
}

.m-166 {
  margin: 166px !important;
}

.w-166 {
  width: 166%!important;
}

.lb-rounded-167 {
  border-bottom-left-radius: 167px !important;
}

.minh-167 {
  min-height: 167px !important;
}

.rb-rounded-167 {
  border-bottom-right-radius: 167px !important;
}

.lt-rounded-167 {
  border-top-left-radius: 167px !important;
}

.rt-rounded-167 {
  border-top-right-radius: 167px !important;
}

.mt-167 {
  margin-top: 167px !important;
}

.mb-167 {
  margin-bottom: 167px !important;
}

.mr-167 {
  margin-right: 167px !important;
}

.ml-167 {
  margin-left: 167px !important;
}

.mx-167 {
  margin-left: 167px !important;
  margin-right: 167px !important;
}

.my-167 {
  margin-top: 167px !important;
  margin-bottom: 167px !important;
}

.pt-167 {
  padding-top: 167px !important;
}

.pb-167 {
  padding-bottom: 167px !important;
}

.pr-167 {
  padding-right: 167px !important;
}

.pl-167 {
  padding-left: 167px !important;
}

.px-167 {
  padding-left: 167px !important;
  padding-right: 167px !important;
}

.py-167 {
  padding-top: 167px !important;
  padding-bottom: 167px !important;
}

.p-167 {
  padding: 167px !important;
}

.m-167 {
  margin: 167px !important;
}

.w-167 {
  width: 167%!important;
}

.lb-rounded-168 {
  border-bottom-left-radius: 168px !important;
}

.minh-168 {
  min-height: 168px !important;
}

.rb-rounded-168 {
  border-bottom-right-radius: 168px !important;
}

.lt-rounded-168 {
  border-top-left-radius: 168px !important;
}

.rt-rounded-168 {
  border-top-right-radius: 168px !important;
}

.mt-168 {
  margin-top: 168px !important;
}

.mb-168 {
  margin-bottom: 168px !important;
}

.mr-168 {
  margin-right: 168px !important;
}

.ml-168 {
  margin-left: 168px !important;
}

.mx-168 {
  margin-left: 168px !important;
  margin-right: 168px !important;
}

.my-168 {
  margin-top: 168px !important;
  margin-bottom: 168px !important;
}

.pt-168 {
  padding-top: 168px !important;
}

.pb-168 {
  padding-bottom: 168px !important;
}

.pr-168 {
  padding-right: 168px !important;
}

.pl-168 {
  padding-left: 168px !important;
}

.px-168 {
  padding-left: 168px !important;
  padding-right: 168px !important;
}

.py-168 {
  padding-top: 168px !important;
  padding-bottom: 168px !important;
}

.p-168 {
  padding: 168px !important;
}

.m-168 {
  margin: 168px !important;
}

.w-168 {
  width: 168%!important;
}

.lb-rounded-169 {
  border-bottom-left-radius: 169px !important;
}

.minh-169 {
  min-height: 169px !important;
}

.rb-rounded-169 {
  border-bottom-right-radius: 169px !important;
}

.lt-rounded-169 {
  border-top-left-radius: 169px !important;
}

.rt-rounded-169 {
  border-top-right-radius: 169px !important;
}

.mt-169 {
  margin-top: 169px !important;
}

.mb-169 {
  margin-bottom: 169px !important;
}

.mr-169 {
  margin-right: 169px !important;
}

.ml-169 {
  margin-left: 169px !important;
}

.mx-169 {
  margin-left: 169px !important;
  margin-right: 169px !important;
}

.my-169 {
  margin-top: 169px !important;
  margin-bottom: 169px !important;
}

.pt-169 {
  padding-top: 169px !important;
}

.pb-169 {
  padding-bottom: 169px !important;
}

.pr-169 {
  padding-right: 169px !important;
}

.pl-169 {
  padding-left: 169px !important;
}

.px-169 {
  padding-left: 169px !important;
  padding-right: 169px !important;
}

.py-169 {
  padding-top: 169px !important;
  padding-bottom: 169px !important;
}

.p-169 {
  padding: 169px !important;
}

.m-169 {
  margin: 169px !important;
}

.w-169 {
  width: 169%!important;
}

.lb-rounded-170 {
  border-bottom-left-radius: 170px !important;
}

.minh-170 {
  min-height: 170px !important;
}

.rb-rounded-170 {
  border-bottom-right-radius: 170px !important;
}

.lt-rounded-170 {
  border-top-left-radius: 170px !important;
}

.rt-rounded-170 {
  border-top-right-radius: 170px !important;
}

.mt-170 {
  margin-top: 170px !important;
}

.mb-170 {
  margin-bottom: 170px !important;
}

.mr-170 {
  margin-right: 170px !important;
}

.ml-170 {
  margin-left: 170px !important;
}

.mx-170 {
  margin-left: 170px !important;
  margin-right: 170px !important;
}

.my-170 {
  margin-top: 170px !important;
  margin-bottom: 170px !important;
}

.pt-170 {
  padding-top: 170px !important;
}

.pb-170 {
  padding-bottom: 170px !important;
}

.pr-170 {
  padding-right: 170px !important;
}

.pl-170 {
  padding-left: 170px !important;
}

.px-170 {
  padding-left: 170px !important;
  padding-right: 170px !important;
}

.py-170 {
  padding-top: 170px !important;
  padding-bottom: 170px !important;
}

.p-170 {
  padding: 170px !important;
}

.m-170 {
  margin: 170px !important;
}

.w-170 {
  width: 170%!important;
}

.lb-rounded-171 {
  border-bottom-left-radius: 171px !important;
}

.minh-171 {
  min-height: 171px !important;
}

.rb-rounded-171 {
  border-bottom-right-radius: 171px !important;
}

.lt-rounded-171 {
  border-top-left-radius: 171px !important;
}

.rt-rounded-171 {
  border-top-right-radius: 171px !important;
}

.mt-171 {
  margin-top: 171px !important;
}

.mb-171 {
  margin-bottom: 171px !important;
}

.mr-171 {
  margin-right: 171px !important;
}

.ml-171 {
  margin-left: 171px !important;
}

.mx-171 {
  margin-left: 171px !important;
  margin-right: 171px !important;
}

.my-171 {
  margin-top: 171px !important;
  margin-bottom: 171px !important;
}

.pt-171 {
  padding-top: 171px !important;
}

.pb-171 {
  padding-bottom: 171px !important;
}

.pr-171 {
  padding-right: 171px !important;
}

.pl-171 {
  padding-left: 171px !important;
}

.px-171 {
  padding-left: 171px !important;
  padding-right: 171px !important;
}

.py-171 {
  padding-top: 171px !important;
  padding-bottom: 171px !important;
}

.p-171 {
  padding: 171px !important;
}

.m-171 {
  margin: 171px !important;
}

.w-171 {
  width: 171%!important;
}

.lb-rounded-172 {
  border-bottom-left-radius: 172px !important;
}

.minh-172 {
  min-height: 172px !important;
}

.rb-rounded-172 {
  border-bottom-right-radius: 172px !important;
}

.lt-rounded-172 {
  border-top-left-radius: 172px !important;
}

.rt-rounded-172 {
  border-top-right-radius: 172px !important;
}

.mt-172 {
  margin-top: 172px !important;
}

.mb-172 {
  margin-bottom: 172px !important;
}

.mr-172 {
  margin-right: 172px !important;
}

.ml-172 {
  margin-left: 172px !important;
}

.mx-172 {
  margin-left: 172px !important;
  margin-right: 172px !important;
}

.my-172 {
  margin-top: 172px !important;
  margin-bottom: 172px !important;
}

.pt-172 {
  padding-top: 172px !important;
}

.pb-172 {
  padding-bottom: 172px !important;
}

.pr-172 {
  padding-right: 172px !important;
}

.pl-172 {
  padding-left: 172px !important;
}

.px-172 {
  padding-left: 172px !important;
  padding-right: 172px !important;
}

.py-172 {
  padding-top: 172px !important;
  padding-bottom: 172px !important;
}

.p-172 {
  padding: 172px !important;
}

.m-172 {
  margin: 172px !important;
}

.w-172 {
  width: 172%!important;
}

.lb-rounded-173 {
  border-bottom-left-radius: 173px !important;
}

.minh-173 {
  min-height: 173px !important;
}

.rb-rounded-173 {
  border-bottom-right-radius: 173px !important;
}

.lt-rounded-173 {
  border-top-left-radius: 173px !important;
}

.rt-rounded-173 {
  border-top-right-radius: 173px !important;
}

.mt-173 {
  margin-top: 173px !important;
}

.mb-173 {
  margin-bottom: 173px !important;
}

.mr-173 {
  margin-right: 173px !important;
}

.ml-173 {
  margin-left: 173px !important;
}

.mx-173 {
  margin-left: 173px !important;
  margin-right: 173px !important;
}

.my-173 {
  margin-top: 173px !important;
  margin-bottom: 173px !important;
}

.pt-173 {
  padding-top: 173px !important;
}

.pb-173 {
  padding-bottom: 173px !important;
}

.pr-173 {
  padding-right: 173px !important;
}

.pl-173 {
  padding-left: 173px !important;
}

.px-173 {
  padding-left: 173px !important;
  padding-right: 173px !important;
}

.py-173 {
  padding-top: 173px !important;
  padding-bottom: 173px !important;
}

.p-173 {
  padding: 173px !important;
}

.m-173 {
  margin: 173px !important;
}

.w-173 {
  width: 173%!important;
}

.lb-rounded-174 {
  border-bottom-left-radius: 174px !important;
}

.minh-174 {
  min-height: 174px !important;
}

.rb-rounded-174 {
  border-bottom-right-radius: 174px !important;
}

.lt-rounded-174 {
  border-top-left-radius: 174px !important;
}

.rt-rounded-174 {
  border-top-right-radius: 174px !important;
}

.mt-174 {
  margin-top: 174px !important;
}

.mb-174 {
  margin-bottom: 174px !important;
}

.mr-174 {
  margin-right: 174px !important;
}

.ml-174 {
  margin-left: 174px !important;
}

.mx-174 {
  margin-left: 174px !important;
  margin-right: 174px !important;
}

.my-174 {
  margin-top: 174px !important;
  margin-bottom: 174px !important;
}

.pt-174 {
  padding-top: 174px !important;
}

.pb-174 {
  padding-bottom: 174px !important;
}

.pr-174 {
  padding-right: 174px !important;
}

.pl-174 {
  padding-left: 174px !important;
}

.px-174 {
  padding-left: 174px !important;
  padding-right: 174px !important;
}

.py-174 {
  padding-top: 174px !important;
  padding-bottom: 174px !important;
}

.p-174 {
  padding: 174px !important;
}

.m-174 {
  margin: 174px !important;
}

.w-174 {
  width: 174%!important;
}

.lb-rounded-175 {
  border-bottom-left-radius: 175px !important;
}

.minh-175 {
  min-height: 175px !important;
}

.rb-rounded-175 {
  border-bottom-right-radius: 175px !important;
}

.lt-rounded-175 {
  border-top-left-radius: 175px !important;
}

.rt-rounded-175 {
  border-top-right-radius: 175px !important;
}

.mt-175 {
  margin-top: 175px !important;
}

.mb-175 {
  margin-bottom: 175px !important;
}

.mr-175 {
  margin-right: 175px !important;
}

.ml-175 {
  margin-left: 175px !important;
}

.mx-175 {
  margin-left: 175px !important;
  margin-right: 175px !important;
}

.my-175 {
  margin-top: 175px !important;
  margin-bottom: 175px !important;
}

.pt-175 {
  padding-top: 175px !important;
}

.pb-175 {
  padding-bottom: 175px !important;
}

.pr-175 {
  padding-right: 175px !important;
}

.pl-175 {
  padding-left: 175px !important;
}

.px-175 {
  padding-left: 175px !important;
  padding-right: 175px !important;
}

.py-175 {
  padding-top: 175px !important;
  padding-bottom: 175px !important;
}

.p-175 {
  padding: 175px !important;
}

.m-175 {
  margin: 175px !important;
}

.w-175 {
  width: 175%!important;
}

.lb-rounded-176 {
  border-bottom-left-radius: 176px !important;
}

.minh-176 {
  min-height: 176px !important;
}

.rb-rounded-176 {
  border-bottom-right-radius: 176px !important;
}

.lt-rounded-176 {
  border-top-left-radius: 176px !important;
}

.rt-rounded-176 {
  border-top-right-radius: 176px !important;
}

.mt-176 {
  margin-top: 176px !important;
}

.mb-176 {
  margin-bottom: 176px !important;
}

.mr-176 {
  margin-right: 176px !important;
}

.ml-176 {
  margin-left: 176px !important;
}

.mx-176 {
  margin-left: 176px !important;
  margin-right: 176px !important;
}

.my-176 {
  margin-top: 176px !important;
  margin-bottom: 176px !important;
}

.pt-176 {
  padding-top: 176px !important;
}

.pb-176 {
  padding-bottom: 176px !important;
}

.pr-176 {
  padding-right: 176px !important;
}

.pl-176 {
  padding-left: 176px !important;
}

.px-176 {
  padding-left: 176px !important;
  padding-right: 176px !important;
}

.py-176 {
  padding-top: 176px !important;
  padding-bottom: 176px !important;
}

.p-176 {
  padding: 176px !important;
}

.m-176 {
  margin: 176px !important;
}

.w-176 {
  width: 176%!important;
}

.lb-rounded-177 {
  border-bottom-left-radius: 177px !important;
}

.minh-177 {
  min-height: 177px !important;
}

.rb-rounded-177 {
  border-bottom-right-radius: 177px !important;
}

.lt-rounded-177 {
  border-top-left-radius: 177px !important;
}

.rt-rounded-177 {
  border-top-right-radius: 177px !important;
}

.mt-177 {
  margin-top: 177px !important;
}

.mb-177 {
  margin-bottom: 177px !important;
}

.mr-177 {
  margin-right: 177px !important;
}

.ml-177 {
  margin-left: 177px !important;
}

.mx-177 {
  margin-left: 177px !important;
  margin-right: 177px !important;
}

.my-177 {
  margin-top: 177px !important;
  margin-bottom: 177px !important;
}

.pt-177 {
  padding-top: 177px !important;
}

.pb-177 {
  padding-bottom: 177px !important;
}

.pr-177 {
  padding-right: 177px !important;
}

.pl-177 {
  padding-left: 177px !important;
}

.px-177 {
  padding-left: 177px !important;
  padding-right: 177px !important;
}

.py-177 {
  padding-top: 177px !important;
  padding-bottom: 177px !important;
}

.p-177 {
  padding: 177px !important;
}

.m-177 {
  margin: 177px !important;
}

.w-177 {
  width: 177%!important;
}

.lb-rounded-178 {
  border-bottom-left-radius: 178px !important;
}

.minh-178 {
  min-height: 178px !important;
}

.rb-rounded-178 {
  border-bottom-right-radius: 178px !important;
}

.lt-rounded-178 {
  border-top-left-radius: 178px !important;
}

.rt-rounded-178 {
  border-top-right-radius: 178px !important;
}

.mt-178 {
  margin-top: 178px !important;
}

.mb-178 {
  margin-bottom: 178px !important;
}

.mr-178 {
  margin-right: 178px !important;
}

.ml-178 {
  margin-left: 178px !important;
}

.mx-178 {
  margin-left: 178px !important;
  margin-right: 178px !important;
}

.my-178 {
  margin-top: 178px !important;
  margin-bottom: 178px !important;
}

.pt-178 {
  padding-top: 178px !important;
}

.pb-178 {
  padding-bottom: 178px !important;
}

.pr-178 {
  padding-right: 178px !important;
}

.pl-178 {
  padding-left: 178px !important;
}

.px-178 {
  padding-left: 178px !important;
  padding-right: 178px !important;
}

.py-178 {
  padding-top: 178px !important;
  padding-bottom: 178px !important;
}

.p-178 {
  padding: 178px !important;
}

.m-178 {
  margin: 178px !important;
}

.w-178 {
  width: 178%!important;
}

.lb-rounded-179 {
  border-bottom-left-radius: 179px !important;
}

.minh-179 {
  min-height: 179px !important;
}

.rb-rounded-179 {
  border-bottom-right-radius: 179px !important;
}

.lt-rounded-179 {
  border-top-left-radius: 179px !important;
}

.rt-rounded-179 {
  border-top-right-radius: 179px !important;
}

.mt-179 {
  margin-top: 179px !important;
}

.mb-179 {
  margin-bottom: 179px !important;
}

.mr-179 {
  margin-right: 179px !important;
}

.ml-179 {
  margin-left: 179px !important;
}

.mx-179 {
  margin-left: 179px !important;
  margin-right: 179px !important;
}

.my-179 {
  margin-top: 179px !important;
  margin-bottom: 179px !important;
}

.pt-179 {
  padding-top: 179px !important;
}

.pb-179 {
  padding-bottom: 179px !important;
}

.pr-179 {
  padding-right: 179px !important;
}

.pl-179 {
  padding-left: 179px !important;
}

.px-179 {
  padding-left: 179px !important;
  padding-right: 179px !important;
}

.py-179 {
  padding-top: 179px !important;
  padding-bottom: 179px !important;
}

.p-179 {
  padding: 179px !important;
}

.m-179 {
  margin: 179px !important;
}

.w-179 {
  width: 179%!important;
}

.lb-rounded-180 {
  border-bottom-left-radius: 180px !important;
}

.minh-180 {
  min-height: 180px !important;
}

.rb-rounded-180 {
  border-bottom-right-radius: 180px !important;
}

.lt-rounded-180 {
  border-top-left-radius: 180px !important;
}

.rt-rounded-180 {
  border-top-right-radius: 180px !important;
}

.mt-180 {
  margin-top: 180px !important;
}

.mb-180 {
  margin-bottom: 180px !important;
}

.mr-180 {
  margin-right: 180px !important;
}

.ml-180 {
  margin-left: 180px !important;
}

.mx-180 {
  margin-left: 180px !important;
  margin-right: 180px !important;
}

.my-180 {
  margin-top: 180px !important;
  margin-bottom: 180px !important;
}

.pt-180 {
  padding-top: 180px !important;
}

.pb-180 {
  padding-bottom: 180px !important;
}

.pr-180 {
  padding-right: 180px !important;
}

.pl-180 {
  padding-left: 180px !important;
}

.px-180 {
  padding-left: 180px !important;
  padding-right: 180px !important;
}

.py-180 {
  padding-top: 180px !important;
  padding-bottom: 180px !important;
}

.p-180 {
  padding: 180px !important;
}

.m-180 {
  margin: 180px !important;
}

.w-180 {
  width: 180%!important;
}

.lb-rounded-181 {
  border-bottom-left-radius: 181px !important;
}

.minh-181 {
  min-height: 181px !important;
}

.rb-rounded-181 {
  border-bottom-right-radius: 181px !important;
}

.lt-rounded-181 {
  border-top-left-radius: 181px !important;
}

.rt-rounded-181 {
  border-top-right-radius: 181px !important;
}

.mt-181 {
  margin-top: 181px !important;
}

.mb-181 {
  margin-bottom: 181px !important;
}

.mr-181 {
  margin-right: 181px !important;
}

.ml-181 {
  margin-left: 181px !important;
}

.mx-181 {
  margin-left: 181px !important;
  margin-right: 181px !important;
}

.my-181 {
  margin-top: 181px !important;
  margin-bottom: 181px !important;
}

.pt-181 {
  padding-top: 181px !important;
}

.pb-181 {
  padding-bottom: 181px !important;
}

.pr-181 {
  padding-right: 181px !important;
}

.pl-181 {
  padding-left: 181px !important;
}

.px-181 {
  padding-left: 181px !important;
  padding-right: 181px !important;
}

.py-181 {
  padding-top: 181px !important;
  padding-bottom: 181px !important;
}

.p-181 {
  padding: 181px !important;
}

.m-181 {
  margin: 181px !important;
}

.w-181 {
  width: 181%!important;
}

.lb-rounded-182 {
  border-bottom-left-radius: 182px !important;
}

.minh-182 {
  min-height: 182px !important;
}

.rb-rounded-182 {
  border-bottom-right-radius: 182px !important;
}

.lt-rounded-182 {
  border-top-left-radius: 182px !important;
}

.rt-rounded-182 {
  border-top-right-radius: 182px !important;
}

.mt-182 {
  margin-top: 182px !important;
}

.mb-182 {
  margin-bottom: 182px !important;
}

.mr-182 {
  margin-right: 182px !important;
}

.ml-182 {
  margin-left: 182px !important;
}

.mx-182 {
  margin-left: 182px !important;
  margin-right: 182px !important;
}

.my-182 {
  margin-top: 182px !important;
  margin-bottom: 182px !important;
}

.pt-182 {
  padding-top: 182px !important;
}

.pb-182 {
  padding-bottom: 182px !important;
}

.pr-182 {
  padding-right: 182px !important;
}

.pl-182 {
  padding-left: 182px !important;
}

.px-182 {
  padding-left: 182px !important;
  padding-right: 182px !important;
}

.py-182 {
  padding-top: 182px !important;
  padding-bottom: 182px !important;
}

.p-182 {
  padding: 182px !important;
}

.m-182 {
  margin: 182px !important;
}

.w-182 {
  width: 182%!important;
}

.lb-rounded-183 {
  border-bottom-left-radius: 183px !important;
}

.minh-183 {
  min-height: 183px !important;
}

.rb-rounded-183 {
  border-bottom-right-radius: 183px !important;
}

.lt-rounded-183 {
  border-top-left-radius: 183px !important;
}

.rt-rounded-183 {
  border-top-right-radius: 183px !important;
}

.mt-183 {
  margin-top: 183px !important;
}

.mb-183 {
  margin-bottom: 183px !important;
}

.mr-183 {
  margin-right: 183px !important;
}

.ml-183 {
  margin-left: 183px !important;
}

.mx-183 {
  margin-left: 183px !important;
  margin-right: 183px !important;
}

.my-183 {
  margin-top: 183px !important;
  margin-bottom: 183px !important;
}

.pt-183 {
  padding-top: 183px !important;
}

.pb-183 {
  padding-bottom: 183px !important;
}

.pr-183 {
  padding-right: 183px !important;
}

.pl-183 {
  padding-left: 183px !important;
}

.px-183 {
  padding-left: 183px !important;
  padding-right: 183px !important;
}

.py-183 {
  padding-top: 183px !important;
  padding-bottom: 183px !important;
}

.p-183 {
  padding: 183px !important;
}

.m-183 {
  margin: 183px !important;
}

.w-183 {
  width: 183%!important;
}

.lb-rounded-184 {
  border-bottom-left-radius: 184px !important;
}

.minh-184 {
  min-height: 184px !important;
}

.rb-rounded-184 {
  border-bottom-right-radius: 184px !important;
}

.lt-rounded-184 {
  border-top-left-radius: 184px !important;
}

.rt-rounded-184 {
  border-top-right-radius: 184px !important;
}

.mt-184 {
  margin-top: 184px !important;
}

.mb-184 {
  margin-bottom: 184px !important;
}

.mr-184 {
  margin-right: 184px !important;
}

.ml-184 {
  margin-left: 184px !important;
}

.mx-184 {
  margin-left: 184px !important;
  margin-right: 184px !important;
}

.my-184 {
  margin-top: 184px !important;
  margin-bottom: 184px !important;
}

.pt-184 {
  padding-top: 184px !important;
}

.pb-184 {
  padding-bottom: 184px !important;
}

.pr-184 {
  padding-right: 184px !important;
}

.pl-184 {
  padding-left: 184px !important;
}

.px-184 {
  padding-left: 184px !important;
  padding-right: 184px !important;
}

.py-184 {
  padding-top: 184px !important;
  padding-bottom: 184px !important;
}

.p-184 {
  padding: 184px !important;
}

.m-184 {
  margin: 184px !important;
}

.w-184 {
  width: 184%!important;
}

.lb-rounded-185 {
  border-bottom-left-radius: 185px !important;
}

.minh-185 {
  min-height: 185px !important;
}

.rb-rounded-185 {
  border-bottom-right-radius: 185px !important;
}

.lt-rounded-185 {
  border-top-left-radius: 185px !important;
}

.rt-rounded-185 {
  border-top-right-radius: 185px !important;
}

.mt-185 {
  margin-top: 185px !important;
}

.mb-185 {
  margin-bottom: 185px !important;
}

.mr-185 {
  margin-right: 185px !important;
}

.ml-185 {
  margin-left: 185px !important;
}

.mx-185 {
  margin-left: 185px !important;
  margin-right: 185px !important;
}

.my-185 {
  margin-top: 185px !important;
  margin-bottom: 185px !important;
}

.pt-185 {
  padding-top: 185px !important;
}

.pb-185 {
  padding-bottom: 185px !important;
}

.pr-185 {
  padding-right: 185px !important;
}

.pl-185 {
  padding-left: 185px !important;
}

.px-185 {
  padding-left: 185px !important;
  padding-right: 185px !important;
}

.py-185 {
  padding-top: 185px !important;
  padding-bottom: 185px !important;
}

.p-185 {
  padding: 185px !important;
}

.m-185 {
  margin: 185px !important;
}

.w-185 {
  width: 185%!important;
}

.lb-rounded-186 {
  border-bottom-left-radius: 186px !important;
}

.minh-186 {
  min-height: 186px !important;
}

.rb-rounded-186 {
  border-bottom-right-radius: 186px !important;
}

.lt-rounded-186 {
  border-top-left-radius: 186px !important;
}

.rt-rounded-186 {
  border-top-right-radius: 186px !important;
}

.mt-186 {
  margin-top: 186px !important;
}

.mb-186 {
  margin-bottom: 186px !important;
}

.mr-186 {
  margin-right: 186px !important;
}

.ml-186 {
  margin-left: 186px !important;
}

.mx-186 {
  margin-left: 186px !important;
  margin-right: 186px !important;
}

.my-186 {
  margin-top: 186px !important;
  margin-bottom: 186px !important;
}

.pt-186 {
  padding-top: 186px !important;
}

.pb-186 {
  padding-bottom: 186px !important;
}

.pr-186 {
  padding-right: 186px !important;
}

.pl-186 {
  padding-left: 186px !important;
}

.px-186 {
  padding-left: 186px !important;
  padding-right: 186px !important;
}

.py-186 {
  padding-top: 186px !important;
  padding-bottom: 186px !important;
}

.p-186 {
  padding: 186px !important;
}

.m-186 {
  margin: 186px !important;
}

.w-186 {
  width: 186%!important;
}

.lb-rounded-187 {
  border-bottom-left-radius: 187px !important;
}

.minh-187 {
  min-height: 187px !important;
}

.rb-rounded-187 {
  border-bottom-right-radius: 187px !important;
}

.lt-rounded-187 {
  border-top-left-radius: 187px !important;
}

.rt-rounded-187 {
  border-top-right-radius: 187px !important;
}

.mt-187 {
  margin-top: 187px !important;
}

.mb-187 {
  margin-bottom: 187px !important;
}

.mr-187 {
  margin-right: 187px !important;
}

.ml-187 {
  margin-left: 187px !important;
}

.mx-187 {
  margin-left: 187px !important;
  margin-right: 187px !important;
}

.my-187 {
  margin-top: 187px !important;
  margin-bottom: 187px !important;
}

.pt-187 {
  padding-top: 187px !important;
}

.pb-187 {
  padding-bottom: 187px !important;
}

.pr-187 {
  padding-right: 187px !important;
}

.pl-187 {
  padding-left: 187px !important;
}

.px-187 {
  padding-left: 187px !important;
  padding-right: 187px !important;
}

.py-187 {
  padding-top: 187px !important;
  padding-bottom: 187px !important;
}

.p-187 {
  padding: 187px !important;
}

.m-187 {
  margin: 187px !important;
}

.w-187 {
  width: 187%!important;
}

.lb-rounded-188 {
  border-bottom-left-radius: 188px !important;
}

.minh-188 {
  min-height: 188px !important;
}

.rb-rounded-188 {
  border-bottom-right-radius: 188px !important;
}

.lt-rounded-188 {
  border-top-left-radius: 188px !important;
}

.rt-rounded-188 {
  border-top-right-radius: 188px !important;
}

.mt-188 {
  margin-top: 188px !important;
}

.mb-188 {
  margin-bottom: 188px !important;
}

.mr-188 {
  margin-right: 188px !important;
}

.ml-188 {
  margin-left: 188px !important;
}

.mx-188 {
  margin-left: 188px !important;
  margin-right: 188px !important;
}

.my-188 {
  margin-top: 188px !important;
  margin-bottom: 188px !important;
}

.pt-188 {
  padding-top: 188px !important;
}

.pb-188 {
  padding-bottom: 188px !important;
}

.pr-188 {
  padding-right: 188px !important;
}

.pl-188 {
  padding-left: 188px !important;
}

.px-188 {
  padding-left: 188px !important;
  padding-right: 188px !important;
}

.py-188 {
  padding-top: 188px !important;
  padding-bottom: 188px !important;
}

.p-188 {
  padding: 188px !important;
}

.m-188 {
  margin: 188px !important;
}

.w-188 {
  width: 188%!important;
}

.lb-rounded-189 {
  border-bottom-left-radius: 189px !important;
}

.minh-189 {
  min-height: 189px !important;
}

.rb-rounded-189 {
  border-bottom-right-radius: 189px !important;
}

.lt-rounded-189 {
  border-top-left-radius: 189px !important;
}

.rt-rounded-189 {
  border-top-right-radius: 189px !important;
}

.mt-189 {
  margin-top: 189px !important;
}

.mb-189 {
  margin-bottom: 189px !important;
}

.mr-189 {
  margin-right: 189px !important;
}

.ml-189 {
  margin-left: 189px !important;
}

.mx-189 {
  margin-left: 189px !important;
  margin-right: 189px !important;
}

.my-189 {
  margin-top: 189px !important;
  margin-bottom: 189px !important;
}

.pt-189 {
  padding-top: 189px !important;
}

.pb-189 {
  padding-bottom: 189px !important;
}

.pr-189 {
  padding-right: 189px !important;
}

.pl-189 {
  padding-left: 189px !important;
}

.px-189 {
  padding-left: 189px !important;
  padding-right: 189px !important;
}

.py-189 {
  padding-top: 189px !important;
  padding-bottom: 189px !important;
}

.p-189 {
  padding: 189px !important;
}

.m-189 {
  margin: 189px !important;
}

.w-189 {
  width: 189%!important;
}

.lb-rounded-190 {
  border-bottom-left-radius: 190px !important;
}

.minh-190 {
  min-height: 190px !important;
}

.rb-rounded-190 {
  border-bottom-right-radius: 190px !important;
}

.lt-rounded-190 {
  border-top-left-radius: 190px !important;
}

.rt-rounded-190 {
  border-top-right-radius: 190px !important;
}

.mt-190 {
  margin-top: 190px !important;
}

.mb-190 {
  margin-bottom: 190px !important;
}

.mr-190 {
  margin-right: 190px !important;
}

.ml-190 {
  margin-left: 190px !important;
}

.mx-190 {
  margin-left: 190px !important;
  margin-right: 190px !important;
}

.my-190 {
  margin-top: 190px !important;
  margin-bottom: 190px !important;
}

.pt-190 {
  padding-top: 190px !important;
}

.pb-190 {
  padding-bottom: 190px !important;
}

.pr-190 {
  padding-right: 190px !important;
}

.pl-190 {
  padding-left: 190px !important;
}

.px-190 {
  padding-left: 190px !important;
  padding-right: 190px !important;
}

.py-190 {
  padding-top: 190px !important;
  padding-bottom: 190px !important;
}

.p-190 {
  padding: 190px !important;
}

.m-190 {
  margin: 190px !important;
}

.w-190 {
  width: 190%!important;
}

.lb-rounded-191 {
  border-bottom-left-radius: 191px !important;
}

.minh-191 {
  min-height: 191px !important;
}

.rb-rounded-191 {
  border-bottom-right-radius: 191px !important;
}

.lt-rounded-191 {
  border-top-left-radius: 191px !important;
}

.rt-rounded-191 {
  border-top-right-radius: 191px !important;
}

.mt-191 {
  margin-top: 191px !important;
}

.mb-191 {
  margin-bottom: 191px !important;
}

.mr-191 {
  margin-right: 191px !important;
}

.ml-191 {
  margin-left: 191px !important;
}

.mx-191 {
  margin-left: 191px !important;
  margin-right: 191px !important;
}

.my-191 {
  margin-top: 191px !important;
  margin-bottom: 191px !important;
}

.pt-191 {
  padding-top: 191px !important;
}

.pb-191 {
  padding-bottom: 191px !important;
}

.pr-191 {
  padding-right: 191px !important;
}

.pl-191 {
  padding-left: 191px !important;
}

.px-191 {
  padding-left: 191px !important;
  padding-right: 191px !important;
}

.py-191 {
  padding-top: 191px !important;
  padding-bottom: 191px !important;
}

.p-191 {
  padding: 191px !important;
}

.m-191 {
  margin: 191px !important;
}

.w-191 {
  width: 191%!important;
}

.lb-rounded-192 {
  border-bottom-left-radius: 192px !important;
}

.minh-192 {
  min-height: 192px !important;
}

.rb-rounded-192 {
  border-bottom-right-radius: 192px !important;
}

.lt-rounded-192 {
  border-top-left-radius: 192px !important;
}

.rt-rounded-192 {
  border-top-right-radius: 192px !important;
}

.mt-192 {
  margin-top: 192px !important;
}

.mb-192 {
  margin-bottom: 192px !important;
}

.mr-192 {
  margin-right: 192px !important;
}

.ml-192 {
  margin-left: 192px !important;
}

.mx-192 {
  margin-left: 192px !important;
  margin-right: 192px !important;
}

.my-192 {
  margin-top: 192px !important;
  margin-bottom: 192px !important;
}

.pt-192 {
  padding-top: 192px !important;
}

.pb-192 {
  padding-bottom: 192px !important;
}

.pr-192 {
  padding-right: 192px !important;
}

.pl-192 {
  padding-left: 192px !important;
}

.px-192 {
  padding-left: 192px !important;
  padding-right: 192px !important;
}

.py-192 {
  padding-top: 192px !important;
  padding-bottom: 192px !important;
}

.p-192 {
  padding: 192px !important;
}

.m-192 {
  margin: 192px !important;
}

.w-192 {
  width: 192%!important;
}

.lb-rounded-193 {
  border-bottom-left-radius: 193px !important;
}

.minh-193 {
  min-height: 193px !important;
}

.rb-rounded-193 {
  border-bottom-right-radius: 193px !important;
}

.lt-rounded-193 {
  border-top-left-radius: 193px !important;
}

.rt-rounded-193 {
  border-top-right-radius: 193px !important;
}

.mt-193 {
  margin-top: 193px !important;
}

.mb-193 {
  margin-bottom: 193px !important;
}

.mr-193 {
  margin-right: 193px !important;
}

.ml-193 {
  margin-left: 193px !important;
}

.mx-193 {
  margin-left: 193px !important;
  margin-right: 193px !important;
}

.my-193 {
  margin-top: 193px !important;
  margin-bottom: 193px !important;
}

.pt-193 {
  padding-top: 193px !important;
}

.pb-193 {
  padding-bottom: 193px !important;
}

.pr-193 {
  padding-right: 193px !important;
}

.pl-193 {
  padding-left: 193px !important;
}

.px-193 {
  padding-left: 193px !important;
  padding-right: 193px !important;
}

.py-193 {
  padding-top: 193px !important;
  padding-bottom: 193px !important;
}

.p-193 {
  padding: 193px !important;
}

.m-193 {
  margin: 193px !important;
}

.w-193 {
  width: 193%!important;
}

.lb-rounded-194 {
  border-bottom-left-radius: 194px !important;
}

.minh-194 {
  min-height: 194px !important;
}

.rb-rounded-194 {
  border-bottom-right-radius: 194px !important;
}

.lt-rounded-194 {
  border-top-left-radius: 194px !important;
}

.rt-rounded-194 {
  border-top-right-radius: 194px !important;
}

.mt-194 {
  margin-top: 194px !important;
}

.mb-194 {
  margin-bottom: 194px !important;
}

.mr-194 {
  margin-right: 194px !important;
}

.ml-194 {
  margin-left: 194px !important;
}

.mx-194 {
  margin-left: 194px !important;
  margin-right: 194px !important;
}

.my-194 {
  margin-top: 194px !important;
  margin-bottom: 194px !important;
}

.pt-194 {
  padding-top: 194px !important;
}

.pb-194 {
  padding-bottom: 194px !important;
}

.pr-194 {
  padding-right: 194px !important;
}

.pl-194 {
  padding-left: 194px !important;
}

.px-194 {
  padding-left: 194px !important;
  padding-right: 194px !important;
}

.py-194 {
  padding-top: 194px !important;
  padding-bottom: 194px !important;
}

.p-194 {
  padding: 194px !important;
}

.m-194 {
  margin: 194px !important;
}

.w-194 {
  width: 194%!important;
}

.lb-rounded-195 {
  border-bottom-left-radius: 195px !important;
}

.minh-195 {
  min-height: 195px !important;
}

.rb-rounded-195 {
  border-bottom-right-radius: 195px !important;
}

.lt-rounded-195 {
  border-top-left-radius: 195px !important;
}

.rt-rounded-195 {
  border-top-right-radius: 195px !important;
}

.mt-195 {
  margin-top: 195px !important;
}

.mb-195 {
  margin-bottom: 195px !important;
}

.mr-195 {
  margin-right: 195px !important;
}

.ml-195 {
  margin-left: 195px !important;
}

.mx-195 {
  margin-left: 195px !important;
  margin-right: 195px !important;
}

.my-195 {
  margin-top: 195px !important;
  margin-bottom: 195px !important;
}

.pt-195 {
  padding-top: 195px !important;
}

.pb-195 {
  padding-bottom: 195px !important;
}

.pr-195 {
  padding-right: 195px !important;
}

.pl-195 {
  padding-left: 195px !important;
}

.px-195 {
  padding-left: 195px !important;
  padding-right: 195px !important;
}

.py-195 {
  padding-top: 195px !important;
  padding-bottom: 195px !important;
}

.p-195 {
  padding: 195px !important;
}

.m-195 {
  margin: 195px !important;
}

.w-195 {
  width: 195%!important;
}

.lb-rounded-196 {
  border-bottom-left-radius: 196px !important;
}

.minh-196 {
  min-height: 196px !important;
}

.rb-rounded-196 {
  border-bottom-right-radius: 196px !important;
}

.lt-rounded-196 {
  border-top-left-radius: 196px !important;
}

.rt-rounded-196 {
  border-top-right-radius: 196px !important;
}

.mt-196 {
  margin-top: 196px !important;
}

.mb-196 {
  margin-bottom: 196px !important;
}

.mr-196 {
  margin-right: 196px !important;
}

.ml-196 {
  margin-left: 196px !important;
}

.mx-196 {
  margin-left: 196px !important;
  margin-right: 196px !important;
}

.my-196 {
  margin-top: 196px !important;
  margin-bottom: 196px !important;
}

.pt-196 {
  padding-top: 196px !important;
}

.pb-196 {
  padding-bottom: 196px !important;
}

.pr-196 {
  padding-right: 196px !important;
}

.pl-196 {
  padding-left: 196px !important;
}

.px-196 {
  padding-left: 196px !important;
  padding-right: 196px !important;
}

.py-196 {
  padding-top: 196px !important;
  padding-bottom: 196px !important;
}

.p-196 {
  padding: 196px !important;
}

.m-196 {
  margin: 196px !important;
}

.w-196 {
  width: 196%!important;
}

.lb-rounded-197 {
  border-bottom-left-radius: 197px !important;
}

.minh-197 {
  min-height: 197px !important;
}

.rb-rounded-197 {
  border-bottom-right-radius: 197px !important;
}

.lt-rounded-197 {
  border-top-left-radius: 197px !important;
}

.rt-rounded-197 {
  border-top-right-radius: 197px !important;
}

.mt-197 {
  margin-top: 197px !important;
}

.mb-197 {
  margin-bottom: 197px !important;
}

.mr-197 {
  margin-right: 197px !important;
}

.ml-197 {
  margin-left: 197px !important;
}

.mx-197 {
  margin-left: 197px !important;
  margin-right: 197px !important;
}

.my-197 {
  margin-top: 197px !important;
  margin-bottom: 197px !important;
}

.pt-197 {
  padding-top: 197px !important;
}

.pb-197 {
  padding-bottom: 197px !important;
}

.pr-197 {
  padding-right: 197px !important;
}

.pl-197 {
  padding-left: 197px !important;
}

.px-197 {
  padding-left: 197px !important;
  padding-right: 197px !important;
}

.py-197 {
  padding-top: 197px !important;
  padding-bottom: 197px !important;
}

.p-197 {
  padding: 197px !important;
}

.m-197 {
  margin: 197px !important;
}

.w-197 {
  width: 197%!important;
}

.lb-rounded-198 {
  border-bottom-left-radius: 198px !important;
}

.minh-198 {
  min-height: 198px !important;
}

.rb-rounded-198 {
  border-bottom-right-radius: 198px !important;
}

.lt-rounded-198 {
  border-top-left-radius: 198px !important;
}

.rt-rounded-198 {
  border-top-right-radius: 198px !important;
}

.mt-198 {
  margin-top: 198px !important;
}

.mb-198 {
  margin-bottom: 198px !important;
}

.mr-198 {
  margin-right: 198px !important;
}

.ml-198 {
  margin-left: 198px !important;
}

.mx-198 {
  margin-left: 198px !important;
  margin-right: 198px !important;
}

.my-198 {
  margin-top: 198px !important;
  margin-bottom: 198px !important;
}

.pt-198 {
  padding-top: 198px !important;
}

.pb-198 {
  padding-bottom: 198px !important;
}

.pr-198 {
  padding-right: 198px !important;
}

.pl-198 {
  padding-left: 198px !important;
}

.px-198 {
  padding-left: 198px !important;
  padding-right: 198px !important;
}

.py-198 {
  padding-top: 198px !important;
  padding-bottom: 198px !important;
}

.p-198 {
  padding: 198px !important;
}

.m-198 {
  margin: 198px !important;
}

.w-198 {
  width: 198%!important;
}

.lb-rounded-199 {
  border-bottom-left-radius: 199px !important;
}

.minh-199 {
  min-height: 199px !important;
}

.rb-rounded-199 {
  border-bottom-right-radius: 199px !important;
}

.lt-rounded-199 {
  border-top-left-radius: 199px !important;
}

.rt-rounded-199 {
  border-top-right-radius: 199px !important;
}

.mt-199 {
  margin-top: 199px !important;
}

.mb-199 {
  margin-bottom: 199px !important;
}

.mr-199 {
  margin-right: 199px !important;
}

.ml-199 {
  margin-left: 199px !important;
}

.mx-199 {
  margin-left: 199px !important;
  margin-right: 199px !important;
}

.my-199 {
  margin-top: 199px !important;
  margin-bottom: 199px !important;
}

.pt-199 {
  padding-top: 199px !important;
}

.pb-199 {
  padding-bottom: 199px !important;
}

.pr-199 {
  padding-right: 199px !important;
}

.pl-199 {
  padding-left: 199px !important;
}

.px-199 {
  padding-left: 199px !important;
  padding-right: 199px !important;
}

.py-199 {
  padding-top: 199px !important;
  padding-bottom: 199px !important;
}

.p-199 {
  padding: 199px !important;
}

.m-199 {
  margin: 199px !important;
}

.w-199 {
  width: 199%!important;
}

.lb-rounded-200 {
  border-bottom-left-radius: 200px !important;
}

.minh-200 {
  min-height: 200px !important;
}

.rb-rounded-200 {
  border-bottom-right-radius: 200px !important;
}

.lt-rounded-200 {
  border-top-left-radius: 200px !important;
}

.rt-rounded-200 {
  border-top-right-radius: 200px !important;
}

.mt-200 {
  margin-top: 200px !important;
}

.mb-200 {
  margin-bottom: 200px !important;
}

.mr-200 {
  margin-right: 200px !important;
}

.ml-200 {
  margin-left: 200px !important;
}

.mx-200 {
  margin-left: 200px !important;
  margin-right: 200px !important;
}

.my-200 {
  margin-top: 200px !important;
  margin-bottom: 200px !important;
}

.pt-200 {
  padding-top: 200px !important;
}

.pb-200 {
  padding-bottom: 200px !important;
}

.pr-200 {
  padding-right: 200px !important;
}

.pl-200 {
  padding-left: 200px !important;
}

.px-200 {
  padding-left: 200px !important;
  padding-right: 200px !important;
}

.py-200 {
  padding-top: 200px !important;
  padding-bottom: 200px !important;
}

.p-200 {
  padding: 200px !important;
}

.m-200 {
  margin: 200px !important;
}

.w-200 {
  width: 200%!important;
}

.lb-rounded-201 {
  border-bottom-left-radius: 201px !important;
}

.minh-201 {
  min-height: 201px !important;
}

.rb-rounded-201 {
  border-bottom-right-radius: 201px !important;
}

.lt-rounded-201 {
  border-top-left-radius: 201px !important;
}

.rt-rounded-201 {
  border-top-right-radius: 201px !important;
}

.mt-201 {
  margin-top: 201px !important;
}

.mb-201 {
  margin-bottom: 201px !important;
}

.mr-201 {
  margin-right: 201px !important;
}

.ml-201 {
  margin-left: 201px !important;
}

.mx-201 {
  margin-left: 201px !important;
  margin-right: 201px !important;
}

.my-201 {
  margin-top: 201px !important;
  margin-bottom: 201px !important;
}

.pt-201 {
  padding-top: 201px !important;
}

.pb-201 {
  padding-bottom: 201px !important;
}

.pr-201 {
  padding-right: 201px !important;
}

.pl-201 {
  padding-left: 201px !important;
}

.px-201 {
  padding-left: 201px !important;
  padding-right: 201px !important;
}

.py-201 {
  padding-top: 201px !important;
  padding-bottom: 201px !important;
}

.p-201 {
  padding: 201px !important;
}

.m-201 {
  margin: 201px !important;
}

.w-201 {
  width: 201%!important;
}

.lb-rounded-202 {
  border-bottom-left-radius: 202px !important;
}

.minh-202 {
  min-height: 202px !important;
}

.rb-rounded-202 {
  border-bottom-right-radius: 202px !important;
}

.lt-rounded-202 {
  border-top-left-radius: 202px !important;
}

.rt-rounded-202 {
  border-top-right-radius: 202px !important;
}

.mt-202 {
  margin-top: 202px !important;
}

.mb-202 {
  margin-bottom: 202px !important;
}

.mr-202 {
  margin-right: 202px !important;
}

.ml-202 {
  margin-left: 202px !important;
}

.mx-202 {
  margin-left: 202px !important;
  margin-right: 202px !important;
}

.my-202 {
  margin-top: 202px !important;
  margin-bottom: 202px !important;
}

.pt-202 {
  padding-top: 202px !important;
}

.pb-202 {
  padding-bottom: 202px !important;
}

.pr-202 {
  padding-right: 202px !important;
}

.pl-202 {
  padding-left: 202px !important;
}

.px-202 {
  padding-left: 202px !important;
  padding-right: 202px !important;
}

.py-202 {
  padding-top: 202px !important;
  padding-bottom: 202px !important;
}

.p-202 {
  padding: 202px !important;
}

.m-202 {
  margin: 202px !important;
}

.w-202 {
  width: 202%!important;
}

.lb-rounded-203 {
  border-bottom-left-radius: 203px !important;
}

.minh-203 {
  min-height: 203px !important;
}

.rb-rounded-203 {
  border-bottom-right-radius: 203px !important;
}

.lt-rounded-203 {
  border-top-left-radius: 203px !important;
}

.rt-rounded-203 {
  border-top-right-radius: 203px !important;
}

.mt-203 {
  margin-top: 203px !important;
}

.mb-203 {
  margin-bottom: 203px !important;
}

.mr-203 {
  margin-right: 203px !important;
}

.ml-203 {
  margin-left: 203px !important;
}

.mx-203 {
  margin-left: 203px !important;
  margin-right: 203px !important;
}

.my-203 {
  margin-top: 203px !important;
  margin-bottom: 203px !important;
}

.pt-203 {
  padding-top: 203px !important;
}

.pb-203 {
  padding-bottom: 203px !important;
}

.pr-203 {
  padding-right: 203px !important;
}

.pl-203 {
  padding-left: 203px !important;
}

.px-203 {
  padding-left: 203px !important;
  padding-right: 203px !important;
}

.py-203 {
  padding-top: 203px !important;
  padding-bottom: 203px !important;
}

.p-203 {
  padding: 203px !important;
}

.m-203 {
  margin: 203px !important;
}

.w-203 {
  width: 203%!important;
}

.lb-rounded-204 {
  border-bottom-left-radius: 204px !important;
}

.minh-204 {
  min-height: 204px !important;
}

.rb-rounded-204 {
  border-bottom-right-radius: 204px !important;
}

.lt-rounded-204 {
  border-top-left-radius: 204px !important;
}

.rt-rounded-204 {
  border-top-right-radius: 204px !important;
}

.mt-204 {
  margin-top: 204px !important;
}

.mb-204 {
  margin-bottom: 204px !important;
}

.mr-204 {
  margin-right: 204px !important;
}

.ml-204 {
  margin-left: 204px !important;
}

.mx-204 {
  margin-left: 204px !important;
  margin-right: 204px !important;
}

.my-204 {
  margin-top: 204px !important;
  margin-bottom: 204px !important;
}

.pt-204 {
  padding-top: 204px !important;
}

.pb-204 {
  padding-bottom: 204px !important;
}

.pr-204 {
  padding-right: 204px !important;
}

.pl-204 {
  padding-left: 204px !important;
}

.px-204 {
  padding-left: 204px !important;
  padding-right: 204px !important;
}

.py-204 {
  padding-top: 204px !important;
  padding-bottom: 204px !important;
}

.p-204 {
  padding: 204px !important;
}

.m-204 {
  margin: 204px !important;
}

.w-204 {
  width: 204%!important;
}

.lb-rounded-205 {
  border-bottom-left-radius: 205px !important;
}

.minh-205 {
  min-height: 205px !important;
}

.rb-rounded-205 {
  border-bottom-right-radius: 205px !important;
}

.lt-rounded-205 {
  border-top-left-radius: 205px !important;
}

.rt-rounded-205 {
  border-top-right-radius: 205px !important;
}

.mt-205 {
  margin-top: 205px !important;
}

.mb-205 {
  margin-bottom: 205px !important;
}

.mr-205 {
  margin-right: 205px !important;
}

.ml-205 {
  margin-left: 205px !important;
}

.mx-205 {
  margin-left: 205px !important;
  margin-right: 205px !important;
}

.my-205 {
  margin-top: 205px !important;
  margin-bottom: 205px !important;
}

.pt-205 {
  padding-top: 205px !important;
}

.pb-205 {
  padding-bottom: 205px !important;
}

.pr-205 {
  padding-right: 205px !important;
}

.pl-205 {
  padding-left: 205px !important;
}

.px-205 {
  padding-left: 205px !important;
  padding-right: 205px !important;
}

.py-205 {
  padding-top: 205px !important;
  padding-bottom: 205px !important;
}

.p-205 {
  padding: 205px !important;
}

.m-205 {
  margin: 205px !important;
}

.w-205 {
  width: 205%!important;
}

.lb-rounded-206 {
  border-bottom-left-radius: 206px !important;
}

.minh-206 {
  min-height: 206px !important;
}

.rb-rounded-206 {
  border-bottom-right-radius: 206px !important;
}

.lt-rounded-206 {
  border-top-left-radius: 206px !important;
}

.rt-rounded-206 {
  border-top-right-radius: 206px !important;
}

.mt-206 {
  margin-top: 206px !important;
}

.mb-206 {
  margin-bottom: 206px !important;
}

.mr-206 {
  margin-right: 206px !important;
}

.ml-206 {
  margin-left: 206px !important;
}

.mx-206 {
  margin-left: 206px !important;
  margin-right: 206px !important;
}

.my-206 {
  margin-top: 206px !important;
  margin-bottom: 206px !important;
}

.pt-206 {
  padding-top: 206px !important;
}

.pb-206 {
  padding-bottom: 206px !important;
}

.pr-206 {
  padding-right: 206px !important;
}

.pl-206 {
  padding-left: 206px !important;
}

.px-206 {
  padding-left: 206px !important;
  padding-right: 206px !important;
}

.py-206 {
  padding-top: 206px !important;
  padding-bottom: 206px !important;
}

.p-206 {
  padding: 206px !important;
}

.m-206 {
  margin: 206px !important;
}

.w-206 {
  width: 206%!important;
}

.lb-rounded-207 {
  border-bottom-left-radius: 207px !important;
}

.minh-207 {
  min-height: 207px !important;
}

.rb-rounded-207 {
  border-bottom-right-radius: 207px !important;
}

.lt-rounded-207 {
  border-top-left-radius: 207px !important;
}

.rt-rounded-207 {
  border-top-right-radius: 207px !important;
}

.mt-207 {
  margin-top: 207px !important;
}

.mb-207 {
  margin-bottom: 207px !important;
}

.mr-207 {
  margin-right: 207px !important;
}

.ml-207 {
  margin-left: 207px !important;
}

.mx-207 {
  margin-left: 207px !important;
  margin-right: 207px !important;
}

.my-207 {
  margin-top: 207px !important;
  margin-bottom: 207px !important;
}

.pt-207 {
  padding-top: 207px !important;
}

.pb-207 {
  padding-bottom: 207px !important;
}

.pr-207 {
  padding-right: 207px !important;
}

.pl-207 {
  padding-left: 207px !important;
}

.px-207 {
  padding-left: 207px !important;
  padding-right: 207px !important;
}

.py-207 {
  padding-top: 207px !important;
  padding-bottom: 207px !important;
}

.p-207 {
  padding: 207px !important;
}

.m-207 {
  margin: 207px !important;
}

.w-207 {
  width: 207%!important;
}

.lb-rounded-208 {
  border-bottom-left-radius: 208px !important;
}

.minh-208 {
  min-height: 208px !important;
}

.rb-rounded-208 {
  border-bottom-right-radius: 208px !important;
}

.lt-rounded-208 {
  border-top-left-radius: 208px !important;
}

.rt-rounded-208 {
  border-top-right-radius: 208px !important;
}

.mt-208 {
  margin-top: 208px !important;
}

.mb-208 {
  margin-bottom: 208px !important;
}

.mr-208 {
  margin-right: 208px !important;
}

.ml-208 {
  margin-left: 208px !important;
}

.mx-208 {
  margin-left: 208px !important;
  margin-right: 208px !important;
}

.my-208 {
  margin-top: 208px !important;
  margin-bottom: 208px !important;
}

.pt-208 {
  padding-top: 208px !important;
}

.pb-208 {
  padding-bottom: 208px !important;
}

.pr-208 {
  padding-right: 208px !important;
}

.pl-208 {
  padding-left: 208px !important;
}

.px-208 {
  padding-left: 208px !important;
  padding-right: 208px !important;
}

.py-208 {
  padding-top: 208px !important;
  padding-bottom: 208px !important;
}

.p-208 {
  padding: 208px !important;
}

.m-208 {
  margin: 208px !important;
}

.w-208 {
  width: 208%!important;
}

.lb-rounded-209 {
  border-bottom-left-radius: 209px !important;
}

.minh-209 {
  min-height: 209px !important;
}

.rb-rounded-209 {
  border-bottom-right-radius: 209px !important;
}

.lt-rounded-209 {
  border-top-left-radius: 209px !important;
}

.rt-rounded-209 {
  border-top-right-radius: 209px !important;
}

.mt-209 {
  margin-top: 209px !important;
}

.mb-209 {
  margin-bottom: 209px !important;
}

.mr-209 {
  margin-right: 209px !important;
}

.ml-209 {
  margin-left: 209px !important;
}

.mx-209 {
  margin-left: 209px !important;
  margin-right: 209px !important;
}

.my-209 {
  margin-top: 209px !important;
  margin-bottom: 209px !important;
}

.pt-209 {
  padding-top: 209px !important;
}

.pb-209 {
  padding-bottom: 209px !important;
}

.pr-209 {
  padding-right: 209px !important;
}

.pl-209 {
  padding-left: 209px !important;
}

.px-209 {
  padding-left: 209px !important;
  padding-right: 209px !important;
}

.py-209 {
  padding-top: 209px !important;
  padding-bottom: 209px !important;
}

.p-209 {
  padding: 209px !important;
}

.m-209 {
  margin: 209px !important;
}

.w-209 {
  width: 209%!important;
}

.lb-rounded-210 {
  border-bottom-left-radius: 210px !important;
}

.minh-210 {
  min-height: 210px !important;
}

.rb-rounded-210 {
  border-bottom-right-radius: 210px !important;
}

.lt-rounded-210 {
  border-top-left-radius: 210px !important;
}

.rt-rounded-210 {
  border-top-right-radius: 210px !important;
}

.mt-210 {
  margin-top: 210px !important;
}

.mb-210 {
  margin-bottom: 210px !important;
}

.mr-210 {
  margin-right: 210px !important;
}

.ml-210 {
  margin-left: 210px !important;
}

.mx-210 {
  margin-left: 210px !important;
  margin-right: 210px !important;
}

.my-210 {
  margin-top: 210px !important;
  margin-bottom: 210px !important;
}

.pt-210 {
  padding-top: 210px !important;
}

.pb-210 {
  padding-bottom: 210px !important;
}

.pr-210 {
  padding-right: 210px !important;
}

.pl-210 {
  padding-left: 210px !important;
}

.px-210 {
  padding-left: 210px !important;
  padding-right: 210px !important;
}

.py-210 {
  padding-top: 210px !important;
  padding-bottom: 210px !important;
}

.p-210 {
  padding: 210px !important;
}

.m-210 {
  margin: 210px !important;
}

.w-210 {
  width: 210%!important;
}

.lb-rounded-211 {
  border-bottom-left-radius: 211px !important;
}

.minh-211 {
  min-height: 211px !important;
}

.rb-rounded-211 {
  border-bottom-right-radius: 211px !important;
}

.lt-rounded-211 {
  border-top-left-radius: 211px !important;
}

.rt-rounded-211 {
  border-top-right-radius: 211px !important;
}

.mt-211 {
  margin-top: 211px !important;
}

.mb-211 {
  margin-bottom: 211px !important;
}

.mr-211 {
  margin-right: 211px !important;
}

.ml-211 {
  margin-left: 211px !important;
}

.mx-211 {
  margin-left: 211px !important;
  margin-right: 211px !important;
}

.my-211 {
  margin-top: 211px !important;
  margin-bottom: 211px !important;
}

.pt-211 {
  padding-top: 211px !important;
}

.pb-211 {
  padding-bottom: 211px !important;
}

.pr-211 {
  padding-right: 211px !important;
}

.pl-211 {
  padding-left: 211px !important;
}

.px-211 {
  padding-left: 211px !important;
  padding-right: 211px !important;
}

.py-211 {
  padding-top: 211px !important;
  padding-bottom: 211px !important;
}

.p-211 {
  padding: 211px !important;
}

.m-211 {
  margin: 211px !important;
}

.w-211 {
  width: 211%!important;
}

.lb-rounded-212 {
  border-bottom-left-radius: 212px !important;
}

.minh-212 {
  min-height: 212px !important;
}

.rb-rounded-212 {
  border-bottom-right-radius: 212px !important;
}

.lt-rounded-212 {
  border-top-left-radius: 212px !important;
}

.rt-rounded-212 {
  border-top-right-radius: 212px !important;
}

.mt-212 {
  margin-top: 212px !important;
}

.mb-212 {
  margin-bottom: 212px !important;
}

.mr-212 {
  margin-right: 212px !important;
}

.ml-212 {
  margin-left: 212px !important;
}

.mx-212 {
  margin-left: 212px !important;
  margin-right: 212px !important;
}

.my-212 {
  margin-top: 212px !important;
  margin-bottom: 212px !important;
}

.pt-212 {
  padding-top: 212px !important;
}

.pb-212 {
  padding-bottom: 212px !important;
}

.pr-212 {
  padding-right: 212px !important;
}

.pl-212 {
  padding-left: 212px !important;
}

.px-212 {
  padding-left: 212px !important;
  padding-right: 212px !important;
}

.py-212 {
  padding-top: 212px !important;
  padding-bottom: 212px !important;
}

.p-212 {
  padding: 212px !important;
}

.m-212 {
  margin: 212px !important;
}

.w-212 {
  width: 212%!important;
}

.lb-rounded-213 {
  border-bottom-left-radius: 213px !important;
}

.minh-213 {
  min-height: 213px !important;
}

.rb-rounded-213 {
  border-bottom-right-radius: 213px !important;
}

.lt-rounded-213 {
  border-top-left-radius: 213px !important;
}

.rt-rounded-213 {
  border-top-right-radius: 213px !important;
}

.mt-213 {
  margin-top: 213px !important;
}

.mb-213 {
  margin-bottom: 213px !important;
}

.mr-213 {
  margin-right: 213px !important;
}

.ml-213 {
  margin-left: 213px !important;
}

.mx-213 {
  margin-left: 213px !important;
  margin-right: 213px !important;
}

.my-213 {
  margin-top: 213px !important;
  margin-bottom: 213px !important;
}

.pt-213 {
  padding-top: 213px !important;
}

.pb-213 {
  padding-bottom: 213px !important;
}

.pr-213 {
  padding-right: 213px !important;
}

.pl-213 {
  padding-left: 213px !important;
}

.px-213 {
  padding-left: 213px !important;
  padding-right: 213px !important;
}

.py-213 {
  padding-top: 213px !important;
  padding-bottom: 213px !important;
}

.p-213 {
  padding: 213px !important;
}

.m-213 {
  margin: 213px !important;
}

.w-213 {
  width: 213%!important;
}

.lb-rounded-214 {
  border-bottom-left-radius: 214px !important;
}

.minh-214 {
  min-height: 214px !important;
}

.rb-rounded-214 {
  border-bottom-right-radius: 214px !important;
}

.lt-rounded-214 {
  border-top-left-radius: 214px !important;
}

.rt-rounded-214 {
  border-top-right-radius: 214px !important;
}

.mt-214 {
  margin-top: 214px !important;
}

.mb-214 {
  margin-bottom: 214px !important;
}

.mr-214 {
  margin-right: 214px !important;
}

.ml-214 {
  margin-left: 214px !important;
}

.mx-214 {
  margin-left: 214px !important;
  margin-right: 214px !important;
}

.my-214 {
  margin-top: 214px !important;
  margin-bottom: 214px !important;
}

.pt-214 {
  padding-top: 214px !important;
}

.pb-214 {
  padding-bottom: 214px !important;
}

.pr-214 {
  padding-right: 214px !important;
}

.pl-214 {
  padding-left: 214px !important;
}

.px-214 {
  padding-left: 214px !important;
  padding-right: 214px !important;
}

.py-214 {
  padding-top: 214px !important;
  padding-bottom: 214px !important;
}

.p-214 {
  padding: 214px !important;
}

.m-214 {
  margin: 214px !important;
}

.w-214 {
  width: 214%!important;
}

.lb-rounded-215 {
  border-bottom-left-radius: 215px !important;
}

.minh-215 {
  min-height: 215px !important;
}

.rb-rounded-215 {
  border-bottom-right-radius: 215px !important;
}

.lt-rounded-215 {
  border-top-left-radius: 215px !important;
}

.rt-rounded-215 {
  border-top-right-radius: 215px !important;
}

.mt-215 {
  margin-top: 215px !important;
}

.mb-215 {
  margin-bottom: 215px !important;
}

.mr-215 {
  margin-right: 215px !important;
}

.ml-215 {
  margin-left: 215px !important;
}

.mx-215 {
  margin-left: 215px !important;
  margin-right: 215px !important;
}

.my-215 {
  margin-top: 215px !important;
  margin-bottom: 215px !important;
}

.pt-215 {
  padding-top: 215px !important;
}

.pb-215 {
  padding-bottom: 215px !important;
}

.pr-215 {
  padding-right: 215px !important;
}

.pl-215 {
  padding-left: 215px !important;
}

.px-215 {
  padding-left: 215px !important;
  padding-right: 215px !important;
}

.py-215 {
  padding-top: 215px !important;
  padding-bottom: 215px !important;
}

.p-215 {
  padding: 215px !important;
}

.m-215 {
  margin: 215px !important;
}

.w-215 {
  width: 215%!important;
}

.lb-rounded-216 {
  border-bottom-left-radius: 216px !important;
}

.minh-216 {
  min-height: 216px !important;
}

.rb-rounded-216 {
  border-bottom-right-radius: 216px !important;
}

.lt-rounded-216 {
  border-top-left-radius: 216px !important;
}

.rt-rounded-216 {
  border-top-right-radius: 216px !important;
}

.mt-216 {
  margin-top: 216px !important;
}

.mb-216 {
  margin-bottom: 216px !important;
}

.mr-216 {
  margin-right: 216px !important;
}

.ml-216 {
  margin-left: 216px !important;
}

.mx-216 {
  margin-left: 216px !important;
  margin-right: 216px !important;
}

.my-216 {
  margin-top: 216px !important;
  margin-bottom: 216px !important;
}

.pt-216 {
  padding-top: 216px !important;
}

.pb-216 {
  padding-bottom: 216px !important;
}

.pr-216 {
  padding-right: 216px !important;
}

.pl-216 {
  padding-left: 216px !important;
}

.px-216 {
  padding-left: 216px !important;
  padding-right: 216px !important;
}

.py-216 {
  padding-top: 216px !important;
  padding-bottom: 216px !important;
}

.p-216 {
  padding: 216px !important;
}

.m-216 {
  margin: 216px !important;
}

.w-216 {
  width: 216%!important;
}

.lb-rounded-217 {
  border-bottom-left-radius: 217px !important;
}

.minh-217 {
  min-height: 217px !important;
}

.rb-rounded-217 {
  border-bottom-right-radius: 217px !important;
}

.lt-rounded-217 {
  border-top-left-radius: 217px !important;
}

.rt-rounded-217 {
  border-top-right-radius: 217px !important;
}

.mt-217 {
  margin-top: 217px !important;
}

.mb-217 {
  margin-bottom: 217px !important;
}

.mr-217 {
  margin-right: 217px !important;
}

.ml-217 {
  margin-left: 217px !important;
}

.mx-217 {
  margin-left: 217px !important;
  margin-right: 217px !important;
}

.my-217 {
  margin-top: 217px !important;
  margin-bottom: 217px !important;
}

.pt-217 {
  padding-top: 217px !important;
}

.pb-217 {
  padding-bottom: 217px !important;
}

.pr-217 {
  padding-right: 217px !important;
}

.pl-217 {
  padding-left: 217px !important;
}

.px-217 {
  padding-left: 217px !important;
  padding-right: 217px !important;
}

.py-217 {
  padding-top: 217px !important;
  padding-bottom: 217px !important;
}

.p-217 {
  padding: 217px !important;
}

.m-217 {
  margin: 217px !important;
}

.w-217 {
  width: 217%!important;
}

.lb-rounded-218 {
  border-bottom-left-radius: 218px !important;
}

.minh-218 {
  min-height: 218px !important;
}

.rb-rounded-218 {
  border-bottom-right-radius: 218px !important;
}

.lt-rounded-218 {
  border-top-left-radius: 218px !important;
}

.rt-rounded-218 {
  border-top-right-radius: 218px !important;
}

.mt-218 {
  margin-top: 218px !important;
}

.mb-218 {
  margin-bottom: 218px !important;
}

.mr-218 {
  margin-right: 218px !important;
}

.ml-218 {
  margin-left: 218px !important;
}

.mx-218 {
  margin-left: 218px !important;
  margin-right: 218px !important;
}

.my-218 {
  margin-top: 218px !important;
  margin-bottom: 218px !important;
}

.pt-218 {
  padding-top: 218px !important;
}

.pb-218 {
  padding-bottom: 218px !important;
}

.pr-218 {
  padding-right: 218px !important;
}

.pl-218 {
  padding-left: 218px !important;
}

.px-218 {
  padding-left: 218px !important;
  padding-right: 218px !important;
}

.py-218 {
  padding-top: 218px !important;
  padding-bottom: 218px !important;
}

.p-218 {
  padding: 218px !important;
}

.m-218 {
  margin: 218px !important;
}

.w-218 {
  width: 218%!important;
}

.lb-rounded-219 {
  border-bottom-left-radius: 219px !important;
}

.minh-219 {
  min-height: 219px !important;
}

.rb-rounded-219 {
  border-bottom-right-radius: 219px !important;
}

.lt-rounded-219 {
  border-top-left-radius: 219px !important;
}

.rt-rounded-219 {
  border-top-right-radius: 219px !important;
}

.mt-219 {
  margin-top: 219px !important;
}

.mb-219 {
  margin-bottom: 219px !important;
}

.mr-219 {
  margin-right: 219px !important;
}

.ml-219 {
  margin-left: 219px !important;
}

.mx-219 {
  margin-left: 219px !important;
  margin-right: 219px !important;
}

.my-219 {
  margin-top: 219px !important;
  margin-bottom: 219px !important;
}

.pt-219 {
  padding-top: 219px !important;
}

.pb-219 {
  padding-bottom: 219px !important;
}

.pr-219 {
  padding-right: 219px !important;
}

.pl-219 {
  padding-left: 219px !important;
}

.px-219 {
  padding-left: 219px !important;
  padding-right: 219px !important;
}

.py-219 {
  padding-top: 219px !important;
  padding-bottom: 219px !important;
}

.p-219 {
  padding: 219px !important;
}

.m-219 {
  margin: 219px !important;
}

.w-219 {
  width: 219%!important;
}

.lb-rounded-220 {
  border-bottom-left-radius: 220px !important;
}

.minh-220 {
  min-height: 220px !important;
}

.rb-rounded-220 {
  border-bottom-right-radius: 220px !important;
}

.lt-rounded-220 {
  border-top-left-radius: 220px !important;
}

.rt-rounded-220 {
  border-top-right-radius: 220px !important;
}

.mt-220 {
  margin-top: 220px !important;
}

.mb-220 {
  margin-bottom: 220px !important;
}

.mr-220 {
  margin-right: 220px !important;
}

.ml-220 {
  margin-left: 220px !important;
}

.mx-220 {
  margin-left: 220px !important;
  margin-right: 220px !important;
}

.my-220 {
  margin-top: 220px !important;
  margin-bottom: 220px !important;
}

.pt-220 {
  padding-top: 220px !important;
}

.pb-220 {
  padding-bottom: 220px !important;
}

.pr-220 {
  padding-right: 220px !important;
}

.pl-220 {
  padding-left: 220px !important;
}

.px-220 {
  padding-left: 220px !important;
  padding-right: 220px !important;
}

.py-220 {
  padding-top: 220px !important;
  padding-bottom: 220px !important;
}

.p-220 {
  padding: 220px !important;
}

.m-220 {
  margin: 220px !important;
}

.w-220 {
  width: 220%!important;
}

.lb-rounded-221 {
  border-bottom-left-radius: 221px !important;
}

.minh-221 {
  min-height: 221px !important;
}

.rb-rounded-221 {
  border-bottom-right-radius: 221px !important;
}

.lt-rounded-221 {
  border-top-left-radius: 221px !important;
}

.rt-rounded-221 {
  border-top-right-radius: 221px !important;
}

.mt-221 {
  margin-top: 221px !important;
}

.mb-221 {
  margin-bottom: 221px !important;
}

.mr-221 {
  margin-right: 221px !important;
}

.ml-221 {
  margin-left: 221px !important;
}

.mx-221 {
  margin-left: 221px !important;
  margin-right: 221px !important;
}

.my-221 {
  margin-top: 221px !important;
  margin-bottom: 221px !important;
}

.pt-221 {
  padding-top: 221px !important;
}

.pb-221 {
  padding-bottom: 221px !important;
}

.pr-221 {
  padding-right: 221px !important;
}

.pl-221 {
  padding-left: 221px !important;
}

.px-221 {
  padding-left: 221px !important;
  padding-right: 221px !important;
}

.py-221 {
  padding-top: 221px !important;
  padding-bottom: 221px !important;
}

.p-221 {
  padding: 221px !important;
}

.m-221 {
  margin: 221px !important;
}

.w-221 {
  width: 221%!important;
}

.lb-rounded-222 {
  border-bottom-left-radius: 222px !important;
}

.minh-222 {
  min-height: 222px !important;
}

.rb-rounded-222 {
  border-bottom-right-radius: 222px !important;
}

.lt-rounded-222 {
  border-top-left-radius: 222px !important;
}

.rt-rounded-222 {
  border-top-right-radius: 222px !important;
}

.mt-222 {
  margin-top: 222px !important;
}

.mb-222 {
  margin-bottom: 222px !important;
}

.mr-222 {
  margin-right: 222px !important;
}

.ml-222 {
  margin-left: 222px !important;
}

.mx-222 {
  margin-left: 222px !important;
  margin-right: 222px !important;
}

.my-222 {
  margin-top: 222px !important;
  margin-bottom: 222px !important;
}

.pt-222 {
  padding-top: 222px !important;
}

.pb-222 {
  padding-bottom: 222px !important;
}

.pr-222 {
  padding-right: 222px !important;
}

.pl-222 {
  padding-left: 222px !important;
}

.px-222 {
  padding-left: 222px !important;
  padding-right: 222px !important;
}

.py-222 {
  padding-top: 222px !important;
  padding-bottom: 222px !important;
}

.p-222 {
  padding: 222px !important;
}

.m-222 {
  margin: 222px !important;
}

.w-222 {
  width: 222%!important;
}

.lb-rounded-223 {
  border-bottom-left-radius: 223px !important;
}

.minh-223 {
  min-height: 223px !important;
}

.rb-rounded-223 {
  border-bottom-right-radius: 223px !important;
}

.lt-rounded-223 {
  border-top-left-radius: 223px !important;
}

.rt-rounded-223 {
  border-top-right-radius: 223px !important;
}

.mt-223 {
  margin-top: 223px !important;
}

.mb-223 {
  margin-bottom: 223px !important;
}

.mr-223 {
  margin-right: 223px !important;
}

.ml-223 {
  margin-left: 223px !important;
}

.mx-223 {
  margin-left: 223px !important;
  margin-right: 223px !important;
}

.my-223 {
  margin-top: 223px !important;
  margin-bottom: 223px !important;
}

.pt-223 {
  padding-top: 223px !important;
}

.pb-223 {
  padding-bottom: 223px !important;
}

.pr-223 {
  padding-right: 223px !important;
}

.pl-223 {
  padding-left: 223px !important;
}

.px-223 {
  padding-left: 223px !important;
  padding-right: 223px !important;
}

.py-223 {
  padding-top: 223px !important;
  padding-bottom: 223px !important;
}

.p-223 {
  padding: 223px !important;
}

.m-223 {
  margin: 223px !important;
}

.w-223 {
  width: 223%!important;
}

.lb-rounded-224 {
  border-bottom-left-radius: 224px !important;
}

.minh-224 {
  min-height: 224px !important;
}

.rb-rounded-224 {
  border-bottom-right-radius: 224px !important;
}

.lt-rounded-224 {
  border-top-left-radius: 224px !important;
}

.rt-rounded-224 {
  border-top-right-radius: 224px !important;
}

.mt-224 {
  margin-top: 224px !important;
}

.mb-224 {
  margin-bottom: 224px !important;
}

.mr-224 {
  margin-right: 224px !important;
}

.ml-224 {
  margin-left: 224px !important;
}

.mx-224 {
  margin-left: 224px !important;
  margin-right: 224px !important;
}

.my-224 {
  margin-top: 224px !important;
  margin-bottom: 224px !important;
}

.pt-224 {
  padding-top: 224px !important;
}

.pb-224 {
  padding-bottom: 224px !important;
}

.pr-224 {
  padding-right: 224px !important;
}

.pl-224 {
  padding-left: 224px !important;
}

.px-224 {
  padding-left: 224px !important;
  padding-right: 224px !important;
}

.py-224 {
  padding-top: 224px !important;
  padding-bottom: 224px !important;
}

.p-224 {
  padding: 224px !important;
}

.m-224 {
  margin: 224px !important;
}

.w-224 {
  width: 224%!important;
}

.lb-rounded-225 {
  border-bottom-left-radius: 225px !important;
}

.minh-225 {
  min-height: 225px !important;
}

.rb-rounded-225 {
  border-bottom-right-radius: 225px !important;
}

.lt-rounded-225 {
  border-top-left-radius: 225px !important;
}

.rt-rounded-225 {
  border-top-right-radius: 225px !important;
}

.mt-225 {
  margin-top: 225px !important;
}

.mb-225 {
  margin-bottom: 225px !important;
}

.mr-225 {
  margin-right: 225px !important;
}

.ml-225 {
  margin-left: 225px !important;
}

.mx-225 {
  margin-left: 225px !important;
  margin-right: 225px !important;
}

.my-225 {
  margin-top: 225px !important;
  margin-bottom: 225px !important;
}

.pt-225 {
  padding-top: 225px !important;
}

.pb-225 {
  padding-bottom: 225px !important;
}

.pr-225 {
  padding-right: 225px !important;
}

.pl-225 {
  padding-left: 225px !important;
}

.px-225 {
  padding-left: 225px !important;
  padding-right: 225px !important;
}

.py-225 {
  padding-top: 225px !important;
  padding-bottom: 225px !important;
}

.p-225 {
  padding: 225px !important;
}

.m-225 {
  margin: 225px !important;
}

.w-225 {
  width: 225%!important;
}

.lb-rounded-226 {
  border-bottom-left-radius: 226px !important;
}

.minh-226 {
  min-height: 226px !important;
}

.rb-rounded-226 {
  border-bottom-right-radius: 226px !important;
}

.lt-rounded-226 {
  border-top-left-radius: 226px !important;
}

.rt-rounded-226 {
  border-top-right-radius: 226px !important;
}

.mt-226 {
  margin-top: 226px !important;
}

.mb-226 {
  margin-bottom: 226px !important;
}

.mr-226 {
  margin-right: 226px !important;
}

.ml-226 {
  margin-left: 226px !important;
}

.mx-226 {
  margin-left: 226px !important;
  margin-right: 226px !important;
}

.my-226 {
  margin-top: 226px !important;
  margin-bottom: 226px !important;
}

.pt-226 {
  padding-top: 226px !important;
}

.pb-226 {
  padding-bottom: 226px !important;
}

.pr-226 {
  padding-right: 226px !important;
}

.pl-226 {
  padding-left: 226px !important;
}

.px-226 {
  padding-left: 226px !important;
  padding-right: 226px !important;
}

.py-226 {
  padding-top: 226px !important;
  padding-bottom: 226px !important;
}

.p-226 {
  padding: 226px !important;
}

.m-226 {
  margin: 226px !important;
}

.w-226 {
  width: 226%!important;
}

.lb-rounded-227 {
  border-bottom-left-radius: 227px !important;
}

.minh-227 {
  min-height: 227px !important;
}

.rb-rounded-227 {
  border-bottom-right-radius: 227px !important;
}

.lt-rounded-227 {
  border-top-left-radius: 227px !important;
}

.rt-rounded-227 {
  border-top-right-radius: 227px !important;
}

.mt-227 {
  margin-top: 227px !important;
}

.mb-227 {
  margin-bottom: 227px !important;
}

.mr-227 {
  margin-right: 227px !important;
}

.ml-227 {
  margin-left: 227px !important;
}

.mx-227 {
  margin-left: 227px !important;
  margin-right: 227px !important;
}

.my-227 {
  margin-top: 227px !important;
  margin-bottom: 227px !important;
}

.pt-227 {
  padding-top: 227px !important;
}

.pb-227 {
  padding-bottom: 227px !important;
}

.pr-227 {
  padding-right: 227px !important;
}

.pl-227 {
  padding-left: 227px !important;
}

.px-227 {
  padding-left: 227px !important;
  padding-right: 227px !important;
}

.py-227 {
  padding-top: 227px !important;
  padding-bottom: 227px !important;
}

.p-227 {
  padding: 227px !important;
}

.m-227 {
  margin: 227px !important;
}

.w-227 {
  width: 227%!important;
}

.lb-rounded-228 {
  border-bottom-left-radius: 228px !important;
}

.minh-228 {
  min-height: 228px !important;
}

.rb-rounded-228 {
  border-bottom-right-radius: 228px !important;
}

.lt-rounded-228 {
  border-top-left-radius: 228px !important;
}

.rt-rounded-228 {
  border-top-right-radius: 228px !important;
}

.mt-228 {
  margin-top: 228px !important;
}

.mb-228 {
  margin-bottom: 228px !important;
}

.mr-228 {
  margin-right: 228px !important;
}

.ml-228 {
  margin-left: 228px !important;
}

.mx-228 {
  margin-left: 228px !important;
  margin-right: 228px !important;
}

.my-228 {
  margin-top: 228px !important;
  margin-bottom: 228px !important;
}

.pt-228 {
  padding-top: 228px !important;
}

.pb-228 {
  padding-bottom: 228px !important;
}

.pr-228 {
  padding-right: 228px !important;
}

.pl-228 {
  padding-left: 228px !important;
}

.px-228 {
  padding-left: 228px !important;
  padding-right: 228px !important;
}

.py-228 {
  padding-top: 228px !important;
  padding-bottom: 228px !important;
}

.p-228 {
  padding: 228px !important;
}

.m-228 {
  margin: 228px !important;
}

.w-228 {
  width: 228%!important;
}

.lb-rounded-229 {
  border-bottom-left-radius: 229px !important;
}

.minh-229 {
  min-height: 229px !important;
}

.rb-rounded-229 {
  border-bottom-right-radius: 229px !important;
}

.lt-rounded-229 {
  border-top-left-radius: 229px !important;
}

.rt-rounded-229 {
  border-top-right-radius: 229px !important;
}

.mt-229 {
  margin-top: 229px !important;
}

.mb-229 {
  margin-bottom: 229px !important;
}

.mr-229 {
  margin-right: 229px !important;
}

.ml-229 {
  margin-left: 229px !important;
}

.mx-229 {
  margin-left: 229px !important;
  margin-right: 229px !important;
}

.my-229 {
  margin-top: 229px !important;
  margin-bottom: 229px !important;
}

.pt-229 {
  padding-top: 229px !important;
}

.pb-229 {
  padding-bottom: 229px !important;
}

.pr-229 {
  padding-right: 229px !important;
}

.pl-229 {
  padding-left: 229px !important;
}

.px-229 {
  padding-left: 229px !important;
  padding-right: 229px !important;
}

.py-229 {
  padding-top: 229px !important;
  padding-bottom: 229px !important;
}

.p-229 {
  padding: 229px !important;
}

.m-229 {
  margin: 229px !important;
}

.w-229 {
  width: 229%!important;
}

.lb-rounded-230 {
  border-bottom-left-radius: 230px !important;
}

.minh-230 {
  min-height: 230px !important;
}

.rb-rounded-230 {
  border-bottom-right-radius: 230px !important;
}

.lt-rounded-230 {
  border-top-left-radius: 230px !important;
}

.rt-rounded-230 {
  border-top-right-radius: 230px !important;
}

.mt-230 {
  margin-top: 230px !important;
}

.mb-230 {
  margin-bottom: 230px !important;
}

.mr-230 {
  margin-right: 230px !important;
}

.ml-230 {
  margin-left: 230px !important;
}

.mx-230 {
  margin-left: 230px !important;
  margin-right: 230px !important;
}

.my-230 {
  margin-top: 230px !important;
  margin-bottom: 230px !important;
}

.pt-230 {
  padding-top: 230px !important;
}

.pb-230 {
  padding-bottom: 230px !important;
}

.pr-230 {
  padding-right: 230px !important;
}

.pl-230 {
  padding-left: 230px !important;
}

.px-230 {
  padding-left: 230px !important;
  padding-right: 230px !important;
}

.py-230 {
  padding-top: 230px !important;
  padding-bottom: 230px !important;
}

.p-230 {
  padding: 230px !important;
}

.m-230 {
  margin: 230px !important;
}

.w-230 {
  width: 230%!important;
}

.lb-rounded-231 {
  border-bottom-left-radius: 231px !important;
}

.minh-231 {
  min-height: 231px !important;
}

.rb-rounded-231 {
  border-bottom-right-radius: 231px !important;
}

.lt-rounded-231 {
  border-top-left-radius: 231px !important;
}

.rt-rounded-231 {
  border-top-right-radius: 231px !important;
}

.mt-231 {
  margin-top: 231px !important;
}

.mb-231 {
  margin-bottom: 231px !important;
}

.mr-231 {
  margin-right: 231px !important;
}

.ml-231 {
  margin-left: 231px !important;
}

.mx-231 {
  margin-left: 231px !important;
  margin-right: 231px !important;
}

.my-231 {
  margin-top: 231px !important;
  margin-bottom: 231px !important;
}

.pt-231 {
  padding-top: 231px !important;
}

.pb-231 {
  padding-bottom: 231px !important;
}

.pr-231 {
  padding-right: 231px !important;
}

.pl-231 {
  padding-left: 231px !important;
}

.px-231 {
  padding-left: 231px !important;
  padding-right: 231px !important;
}

.py-231 {
  padding-top: 231px !important;
  padding-bottom: 231px !important;
}

.p-231 {
  padding: 231px !important;
}

.m-231 {
  margin: 231px !important;
}

.w-231 {
  width: 231%!important;
}

.lb-rounded-232 {
  border-bottom-left-radius: 232px !important;
}

.minh-232 {
  min-height: 232px !important;
}

.rb-rounded-232 {
  border-bottom-right-radius: 232px !important;
}

.lt-rounded-232 {
  border-top-left-radius: 232px !important;
}

.rt-rounded-232 {
  border-top-right-radius: 232px !important;
}

.mt-232 {
  margin-top: 232px !important;
}

.mb-232 {
  margin-bottom: 232px !important;
}

.mr-232 {
  margin-right: 232px !important;
}

.ml-232 {
  margin-left: 232px !important;
}

.mx-232 {
  margin-left: 232px !important;
  margin-right: 232px !important;
}

.my-232 {
  margin-top: 232px !important;
  margin-bottom: 232px !important;
}

.pt-232 {
  padding-top: 232px !important;
}

.pb-232 {
  padding-bottom: 232px !important;
}

.pr-232 {
  padding-right: 232px !important;
}

.pl-232 {
  padding-left: 232px !important;
}

.px-232 {
  padding-left: 232px !important;
  padding-right: 232px !important;
}

.py-232 {
  padding-top: 232px !important;
  padding-bottom: 232px !important;
}

.p-232 {
  padding: 232px !important;
}

.m-232 {
  margin: 232px !important;
}

.w-232 {
  width: 232%!important;
}

.lb-rounded-233 {
  border-bottom-left-radius: 233px !important;
}

.minh-233 {
  min-height: 233px !important;
}

.rb-rounded-233 {
  border-bottom-right-radius: 233px !important;
}

.lt-rounded-233 {
  border-top-left-radius: 233px !important;
}

.rt-rounded-233 {
  border-top-right-radius: 233px !important;
}

.mt-233 {
  margin-top: 233px !important;
}

.mb-233 {
  margin-bottom: 233px !important;
}

.mr-233 {
  margin-right: 233px !important;
}

.ml-233 {
  margin-left: 233px !important;
}

.mx-233 {
  margin-left: 233px !important;
  margin-right: 233px !important;
}

.my-233 {
  margin-top: 233px !important;
  margin-bottom: 233px !important;
}

.pt-233 {
  padding-top: 233px !important;
}

.pb-233 {
  padding-bottom: 233px !important;
}

.pr-233 {
  padding-right: 233px !important;
}

.pl-233 {
  padding-left: 233px !important;
}

.px-233 {
  padding-left: 233px !important;
  padding-right: 233px !important;
}

.py-233 {
  padding-top: 233px !important;
  padding-bottom: 233px !important;
}

.p-233 {
  padding: 233px !important;
}

.m-233 {
  margin: 233px !important;
}

.w-233 {
  width: 233%!important;
}

.lb-rounded-234 {
  border-bottom-left-radius: 234px !important;
}

.minh-234 {
  min-height: 234px !important;
}

.rb-rounded-234 {
  border-bottom-right-radius: 234px !important;
}

.lt-rounded-234 {
  border-top-left-radius: 234px !important;
}

.rt-rounded-234 {
  border-top-right-radius: 234px !important;
}

.mt-234 {
  margin-top: 234px !important;
}

.mb-234 {
  margin-bottom: 234px !important;
}

.mr-234 {
  margin-right: 234px !important;
}

.ml-234 {
  margin-left: 234px !important;
}

.mx-234 {
  margin-left: 234px !important;
  margin-right: 234px !important;
}

.my-234 {
  margin-top: 234px !important;
  margin-bottom: 234px !important;
}

.pt-234 {
  padding-top: 234px !important;
}

.pb-234 {
  padding-bottom: 234px !important;
}

.pr-234 {
  padding-right: 234px !important;
}

.pl-234 {
  padding-left: 234px !important;
}

.px-234 {
  padding-left: 234px !important;
  padding-right: 234px !important;
}

.py-234 {
  padding-top: 234px !important;
  padding-bottom: 234px !important;
}

.p-234 {
  padding: 234px !important;
}

.m-234 {
  margin: 234px !important;
}

.w-234 {
  width: 234%!important;
}

.lb-rounded-235 {
  border-bottom-left-radius: 235px !important;
}

.minh-235 {
  min-height: 235px !important;
}

.rb-rounded-235 {
  border-bottom-right-radius: 235px !important;
}

.lt-rounded-235 {
  border-top-left-radius: 235px !important;
}

.rt-rounded-235 {
  border-top-right-radius: 235px !important;
}

.mt-235 {
  margin-top: 235px !important;
}

.mb-235 {
  margin-bottom: 235px !important;
}

.mr-235 {
  margin-right: 235px !important;
}

.ml-235 {
  margin-left: 235px !important;
}

.mx-235 {
  margin-left: 235px !important;
  margin-right: 235px !important;
}

.my-235 {
  margin-top: 235px !important;
  margin-bottom: 235px !important;
}

.pt-235 {
  padding-top: 235px !important;
}

.pb-235 {
  padding-bottom: 235px !important;
}

.pr-235 {
  padding-right: 235px !important;
}

.pl-235 {
  padding-left: 235px !important;
}

.px-235 {
  padding-left: 235px !important;
  padding-right: 235px !important;
}

.py-235 {
  padding-top: 235px !important;
  padding-bottom: 235px !important;
}

.p-235 {
  padding: 235px !important;
}

.m-235 {
  margin: 235px !important;
}

.w-235 {
  width: 235%!important;
}

.lb-rounded-236 {
  border-bottom-left-radius: 236px !important;
}

.minh-236 {
  min-height: 236px !important;
}

.rb-rounded-236 {
  border-bottom-right-radius: 236px !important;
}

.lt-rounded-236 {
  border-top-left-radius: 236px !important;
}

.rt-rounded-236 {
  border-top-right-radius: 236px !important;
}

.mt-236 {
  margin-top: 236px !important;
}

.mb-236 {
  margin-bottom: 236px !important;
}

.mr-236 {
  margin-right: 236px !important;
}

.ml-236 {
  margin-left: 236px !important;
}

.mx-236 {
  margin-left: 236px !important;
  margin-right: 236px !important;
}

.my-236 {
  margin-top: 236px !important;
  margin-bottom: 236px !important;
}

.pt-236 {
  padding-top: 236px !important;
}

.pb-236 {
  padding-bottom: 236px !important;
}

.pr-236 {
  padding-right: 236px !important;
}

.pl-236 {
  padding-left: 236px !important;
}

.px-236 {
  padding-left: 236px !important;
  padding-right: 236px !important;
}

.py-236 {
  padding-top: 236px !important;
  padding-bottom: 236px !important;
}

.p-236 {
  padding: 236px !important;
}

.m-236 {
  margin: 236px !important;
}

.w-236 {
  width: 236%!important;
}

.lb-rounded-237 {
  border-bottom-left-radius: 237px !important;
}

.minh-237 {
  min-height: 237px !important;
}

.rb-rounded-237 {
  border-bottom-right-radius: 237px !important;
}

.lt-rounded-237 {
  border-top-left-radius: 237px !important;
}

.rt-rounded-237 {
  border-top-right-radius: 237px !important;
}

.mt-237 {
  margin-top: 237px !important;
}

.mb-237 {
  margin-bottom: 237px !important;
}

.mr-237 {
  margin-right: 237px !important;
}

.ml-237 {
  margin-left: 237px !important;
}

.mx-237 {
  margin-left: 237px !important;
  margin-right: 237px !important;
}

.my-237 {
  margin-top: 237px !important;
  margin-bottom: 237px !important;
}

.pt-237 {
  padding-top: 237px !important;
}

.pb-237 {
  padding-bottom: 237px !important;
}

.pr-237 {
  padding-right: 237px !important;
}

.pl-237 {
  padding-left: 237px !important;
}

.px-237 {
  padding-left: 237px !important;
  padding-right: 237px !important;
}

.py-237 {
  padding-top: 237px !important;
  padding-bottom: 237px !important;
}

.p-237 {
  padding: 237px !important;
}

.m-237 {
  margin: 237px !important;
}

.w-237 {
  width: 237%!important;
}

.lb-rounded-238 {
  border-bottom-left-radius: 238px !important;
}

.minh-238 {
  min-height: 238px !important;
}

.rb-rounded-238 {
  border-bottom-right-radius: 238px !important;
}

.lt-rounded-238 {
  border-top-left-radius: 238px !important;
}

.rt-rounded-238 {
  border-top-right-radius: 238px !important;
}

.mt-238 {
  margin-top: 238px !important;
}

.mb-238 {
  margin-bottom: 238px !important;
}

.mr-238 {
  margin-right: 238px !important;
}

.ml-238 {
  margin-left: 238px !important;
}

.mx-238 {
  margin-left: 238px !important;
  margin-right: 238px !important;
}

.my-238 {
  margin-top: 238px !important;
  margin-bottom: 238px !important;
}

.pt-238 {
  padding-top: 238px !important;
}

.pb-238 {
  padding-bottom: 238px !important;
}

.pr-238 {
  padding-right: 238px !important;
}

.pl-238 {
  padding-left: 238px !important;
}

.px-238 {
  padding-left: 238px !important;
  padding-right: 238px !important;
}

.py-238 {
  padding-top: 238px !important;
  padding-bottom: 238px !important;
}

.p-238 {
  padding: 238px !important;
}

.m-238 {
  margin: 238px !important;
}

.w-238 {
  width: 238%!important;
}

.lb-rounded-239 {
  border-bottom-left-radius: 239px !important;
}

.minh-239 {
  min-height: 239px !important;
}

.rb-rounded-239 {
  border-bottom-right-radius: 239px !important;
}

.lt-rounded-239 {
  border-top-left-radius: 239px !important;
}

.rt-rounded-239 {
  border-top-right-radius: 239px !important;
}

.mt-239 {
  margin-top: 239px !important;
}

.mb-239 {
  margin-bottom: 239px !important;
}

.mr-239 {
  margin-right: 239px !important;
}

.ml-239 {
  margin-left: 239px !important;
}

.mx-239 {
  margin-left: 239px !important;
  margin-right: 239px !important;
}

.my-239 {
  margin-top: 239px !important;
  margin-bottom: 239px !important;
}

.pt-239 {
  padding-top: 239px !important;
}

.pb-239 {
  padding-bottom: 239px !important;
}

.pr-239 {
  padding-right: 239px !important;
}

.pl-239 {
  padding-left: 239px !important;
}

.px-239 {
  padding-left: 239px !important;
  padding-right: 239px !important;
}

.py-239 {
  padding-top: 239px !important;
  padding-bottom: 239px !important;
}

.p-239 {
  padding: 239px !important;
}

.m-239 {
  margin: 239px !important;
}

.w-239 {
  width: 239%!important;
}

.lb-rounded-240 {
  border-bottom-left-radius: 240px !important;
}

.minh-240 {
  min-height: 240px !important;
}

.rb-rounded-240 {
  border-bottom-right-radius: 240px !important;
}

.lt-rounded-240 {
  border-top-left-radius: 240px !important;
}

.rt-rounded-240 {
  border-top-right-radius: 240px !important;
}

.mt-240 {
  margin-top: 240px !important;
}

.mb-240 {
  margin-bottom: 240px !important;
}

.mr-240 {
  margin-right: 240px !important;
}

.ml-240 {
  margin-left: 240px !important;
}

.mx-240 {
  margin-left: 240px !important;
  margin-right: 240px !important;
}

.my-240 {
  margin-top: 240px !important;
  margin-bottom: 240px !important;
}

.pt-240 {
  padding-top: 240px !important;
}

.pb-240 {
  padding-bottom: 240px !important;
}

.pr-240 {
  padding-right: 240px !important;
}

.pl-240 {
  padding-left: 240px !important;
}

.px-240 {
  padding-left: 240px !important;
  padding-right: 240px !important;
}

.py-240 {
  padding-top: 240px !important;
  padding-bottom: 240px !important;
}

.p-240 {
  padding: 240px !important;
}

.m-240 {
  margin: 240px !important;
}

.w-240 {
  width: 240%!important;
}

.lb-rounded-241 {
  border-bottom-left-radius: 241px !important;
}

.minh-241 {
  min-height: 241px !important;
}

.rb-rounded-241 {
  border-bottom-right-radius: 241px !important;
}

.lt-rounded-241 {
  border-top-left-radius: 241px !important;
}

.rt-rounded-241 {
  border-top-right-radius: 241px !important;
}

.mt-241 {
  margin-top: 241px !important;
}

.mb-241 {
  margin-bottom: 241px !important;
}

.mr-241 {
  margin-right: 241px !important;
}

.ml-241 {
  margin-left: 241px !important;
}

.mx-241 {
  margin-left: 241px !important;
  margin-right: 241px !important;
}

.my-241 {
  margin-top: 241px !important;
  margin-bottom: 241px !important;
}

.pt-241 {
  padding-top: 241px !important;
}

.pb-241 {
  padding-bottom: 241px !important;
}

.pr-241 {
  padding-right: 241px !important;
}

.pl-241 {
  padding-left: 241px !important;
}

.px-241 {
  padding-left: 241px !important;
  padding-right: 241px !important;
}

.py-241 {
  padding-top: 241px !important;
  padding-bottom: 241px !important;
}

.p-241 {
  padding: 241px !important;
}

.m-241 {
  margin: 241px !important;
}

.w-241 {
  width: 241%!important;
}

.lb-rounded-242 {
  border-bottom-left-radius: 242px !important;
}

.minh-242 {
  min-height: 242px !important;
}

.rb-rounded-242 {
  border-bottom-right-radius: 242px !important;
}

.lt-rounded-242 {
  border-top-left-radius: 242px !important;
}

.rt-rounded-242 {
  border-top-right-radius: 242px !important;
}

.mt-242 {
  margin-top: 242px !important;
}

.mb-242 {
  margin-bottom: 242px !important;
}

.mr-242 {
  margin-right: 242px !important;
}

.ml-242 {
  margin-left: 242px !important;
}

.mx-242 {
  margin-left: 242px !important;
  margin-right: 242px !important;
}

.my-242 {
  margin-top: 242px !important;
  margin-bottom: 242px !important;
}

.pt-242 {
  padding-top: 242px !important;
}

.pb-242 {
  padding-bottom: 242px !important;
}

.pr-242 {
  padding-right: 242px !important;
}

.pl-242 {
  padding-left: 242px !important;
}

.px-242 {
  padding-left: 242px !important;
  padding-right: 242px !important;
}

.py-242 {
  padding-top: 242px !important;
  padding-bottom: 242px !important;
}

.p-242 {
  padding: 242px !important;
}

.m-242 {
  margin: 242px !important;
}

.w-242 {
  width: 242%!important;
}

.lb-rounded-243 {
  border-bottom-left-radius: 243px !important;
}

.minh-243 {
  min-height: 243px !important;
}

.rb-rounded-243 {
  border-bottom-right-radius: 243px !important;
}

.lt-rounded-243 {
  border-top-left-radius: 243px !important;
}

.rt-rounded-243 {
  border-top-right-radius: 243px !important;
}

.mt-243 {
  margin-top: 243px !important;
}

.mb-243 {
  margin-bottom: 243px !important;
}

.mr-243 {
  margin-right: 243px !important;
}

.ml-243 {
  margin-left: 243px !important;
}

.mx-243 {
  margin-left: 243px !important;
  margin-right: 243px !important;
}

.my-243 {
  margin-top: 243px !important;
  margin-bottom: 243px !important;
}

.pt-243 {
  padding-top: 243px !important;
}

.pb-243 {
  padding-bottom: 243px !important;
}

.pr-243 {
  padding-right: 243px !important;
}

.pl-243 {
  padding-left: 243px !important;
}

.px-243 {
  padding-left: 243px !important;
  padding-right: 243px !important;
}

.py-243 {
  padding-top: 243px !important;
  padding-bottom: 243px !important;
}

.p-243 {
  padding: 243px !important;
}

.m-243 {
  margin: 243px !important;
}

.w-243 {
  width: 243%!important;
}

.lb-rounded-244 {
  border-bottom-left-radius: 244px !important;
}

.minh-244 {
  min-height: 244px !important;
}

.rb-rounded-244 {
  border-bottom-right-radius: 244px !important;
}

.lt-rounded-244 {
  border-top-left-radius: 244px !important;
}

.rt-rounded-244 {
  border-top-right-radius: 244px !important;
}

.mt-244 {
  margin-top: 244px !important;
}

.mb-244 {
  margin-bottom: 244px !important;
}

.mr-244 {
  margin-right: 244px !important;
}

.ml-244 {
  margin-left: 244px !important;
}

.mx-244 {
  margin-left: 244px !important;
  margin-right: 244px !important;
}

.my-244 {
  margin-top: 244px !important;
  margin-bottom: 244px !important;
}

.pt-244 {
  padding-top: 244px !important;
}

.pb-244 {
  padding-bottom: 244px !important;
}

.pr-244 {
  padding-right: 244px !important;
}

.pl-244 {
  padding-left: 244px !important;
}

.px-244 {
  padding-left: 244px !important;
  padding-right: 244px !important;
}

.py-244 {
  padding-top: 244px !important;
  padding-bottom: 244px !important;
}

.p-244 {
  padding: 244px !important;
}

.m-244 {
  margin: 244px !important;
}

.w-244 {
  width: 244%!important;
}

.lb-rounded-245 {
  border-bottom-left-radius: 245px !important;
}

.minh-245 {
  min-height: 245px !important;
}

.rb-rounded-245 {
  border-bottom-right-radius: 245px !important;
}

.lt-rounded-245 {
  border-top-left-radius: 245px !important;
}

.rt-rounded-245 {
  border-top-right-radius: 245px !important;
}

.mt-245 {
  margin-top: 245px !important;
}

.mb-245 {
  margin-bottom: 245px !important;
}

.mr-245 {
  margin-right: 245px !important;
}

.ml-245 {
  margin-left: 245px !important;
}

.mx-245 {
  margin-left: 245px !important;
  margin-right: 245px !important;
}

.my-245 {
  margin-top: 245px !important;
  margin-bottom: 245px !important;
}

.pt-245 {
  padding-top: 245px !important;
}

.pb-245 {
  padding-bottom: 245px !important;
}

.pr-245 {
  padding-right: 245px !important;
}

.pl-245 {
  padding-left: 245px !important;
}

.px-245 {
  padding-left: 245px !important;
  padding-right: 245px !important;
}

.py-245 {
  padding-top: 245px !important;
  padding-bottom: 245px !important;
}

.p-245 {
  padding: 245px !important;
}

.m-245 {
  margin: 245px !important;
}

.w-245 {
  width: 245%!important;
}

.lb-rounded-246 {
  border-bottom-left-radius: 246px !important;
}

.minh-246 {
  min-height: 246px !important;
}

.rb-rounded-246 {
  border-bottom-right-radius: 246px !important;
}

.lt-rounded-246 {
  border-top-left-radius: 246px !important;
}

.rt-rounded-246 {
  border-top-right-radius: 246px !important;
}

.mt-246 {
  margin-top: 246px !important;
}

.mb-246 {
  margin-bottom: 246px !important;
}

.mr-246 {
  margin-right: 246px !important;
}

.ml-246 {
  margin-left: 246px !important;
}

.mx-246 {
  margin-left: 246px !important;
  margin-right: 246px !important;
}

.my-246 {
  margin-top: 246px !important;
  margin-bottom: 246px !important;
}

.pt-246 {
  padding-top: 246px !important;
}

.pb-246 {
  padding-bottom: 246px !important;
}

.pr-246 {
  padding-right: 246px !important;
}

.pl-246 {
  padding-left: 246px !important;
}

.px-246 {
  padding-left: 246px !important;
  padding-right: 246px !important;
}

.py-246 {
  padding-top: 246px !important;
  padding-bottom: 246px !important;
}

.p-246 {
  padding: 246px !important;
}

.m-246 {
  margin: 246px !important;
}

.w-246 {
  width: 246%!important;
}

.lb-rounded-247 {
  border-bottom-left-radius: 247px !important;
}

.minh-247 {
  min-height: 247px !important;
}

.rb-rounded-247 {
  border-bottom-right-radius: 247px !important;
}

.lt-rounded-247 {
  border-top-left-radius: 247px !important;
}

.rt-rounded-247 {
  border-top-right-radius: 247px !important;
}

.mt-247 {
  margin-top: 247px !important;
}

.mb-247 {
  margin-bottom: 247px !important;
}

.mr-247 {
  margin-right: 247px !important;
}

.ml-247 {
  margin-left: 247px !important;
}

.mx-247 {
  margin-left: 247px !important;
  margin-right: 247px !important;
}

.my-247 {
  margin-top: 247px !important;
  margin-bottom: 247px !important;
}

.pt-247 {
  padding-top: 247px !important;
}

.pb-247 {
  padding-bottom: 247px !important;
}

.pr-247 {
  padding-right: 247px !important;
}

.pl-247 {
  padding-left: 247px !important;
}

.px-247 {
  padding-left: 247px !important;
  padding-right: 247px !important;
}

.py-247 {
  padding-top: 247px !important;
  padding-bottom: 247px !important;
}

.p-247 {
  padding: 247px !important;
}

.m-247 {
  margin: 247px !important;
}

.w-247 {
  width: 247%!important;
}

.lb-rounded-248 {
  border-bottom-left-radius: 248px !important;
}

.minh-248 {
  min-height: 248px !important;
}

.rb-rounded-248 {
  border-bottom-right-radius: 248px !important;
}

.lt-rounded-248 {
  border-top-left-radius: 248px !important;
}

.rt-rounded-248 {
  border-top-right-radius: 248px !important;
}

.mt-248 {
  margin-top: 248px !important;
}

.mb-248 {
  margin-bottom: 248px !important;
}

.mr-248 {
  margin-right: 248px !important;
}

.ml-248 {
  margin-left: 248px !important;
}

.mx-248 {
  margin-left: 248px !important;
  margin-right: 248px !important;
}

.my-248 {
  margin-top: 248px !important;
  margin-bottom: 248px !important;
}

.pt-248 {
  padding-top: 248px !important;
}

.pb-248 {
  padding-bottom: 248px !important;
}

.pr-248 {
  padding-right: 248px !important;
}

.pl-248 {
  padding-left: 248px !important;
}

.px-248 {
  padding-left: 248px !important;
  padding-right: 248px !important;
}

.py-248 {
  padding-top: 248px !important;
  padding-bottom: 248px !important;
}

.p-248 {
  padding: 248px !important;
}

.m-248 {
  margin: 248px !important;
}

.w-248 {
  width: 248%!important;
}

.lb-rounded-249 {
  border-bottom-left-radius: 249px !important;
}

.minh-249 {
  min-height: 249px !important;
}

.rb-rounded-249 {
  border-bottom-right-radius: 249px !important;
}

.lt-rounded-249 {
  border-top-left-radius: 249px !important;
}

.rt-rounded-249 {
  border-top-right-radius: 249px !important;
}

.mt-249 {
  margin-top: 249px !important;
}

.mb-249 {
  margin-bottom: 249px !important;
}

.mr-249 {
  margin-right: 249px !important;
}

.ml-249 {
  margin-left: 249px !important;
}

.mx-249 {
  margin-left: 249px !important;
  margin-right: 249px !important;
}

.my-249 {
  margin-top: 249px !important;
  margin-bottom: 249px !important;
}

.pt-249 {
  padding-top: 249px !important;
}

.pb-249 {
  padding-bottom: 249px !important;
}

.pr-249 {
  padding-right: 249px !important;
}

.pl-249 {
  padding-left: 249px !important;
}

.px-249 {
  padding-left: 249px !important;
  padding-right: 249px !important;
}

.py-249 {
  padding-top: 249px !important;
  padding-bottom: 249px !important;
}

.p-249 {
  padding: 249px !important;
}

.m-249 {
  margin: 249px !important;
}

.w-249 {
  width: 249%!important;
}

.lb-rounded-250 {
  border-bottom-left-radius: 250px !important;
}

.minh-250 {
  min-height: 250px !important;
}

.rb-rounded-250 {
  border-bottom-right-radius: 250px !important;
}

.lt-rounded-250 {
  border-top-left-radius: 250px !important;
}

.rt-rounded-250 {
  border-top-right-radius: 250px !important;
}

.mt-250 {
  margin-top: 250px !important;
}

.mb-250 {
  margin-bottom: 250px !important;
}

.mr-250 {
  margin-right: 250px !important;
}

.ml-250 {
  margin-left: 250px !important;
}

.mx-250 {
  margin-left: 250px !important;
  margin-right: 250px !important;
}

.my-250 {
  margin-top: 250px !important;
  margin-bottom: 250px !important;
}

.pt-250 {
  padding-top: 250px !important;
}

.pb-250 {
  padding-bottom: 250px !important;
}

.pr-250 {
  padding-right: 250px !important;
}

.pl-250 {
  padding-left: 250px !important;
}

.px-250 {
  padding-left: 250px !important;
  padding-right: 250px !important;
}

.py-250 {
  padding-top: 250px !important;
  padding-bottom: 250px !important;
}

.p-250 {
  padding: 250px !important;
}

.m-250 {
  margin: 250px !important;
}

.w-250 {
  width: 250%!important;
}

.lb-rounded-251 {
  border-bottom-left-radius: 251px !important;
}

.minh-251 {
  min-height: 251px !important;
}

.rb-rounded-251 {
  border-bottom-right-radius: 251px !important;
}

.lt-rounded-251 {
  border-top-left-radius: 251px !important;
}

.rt-rounded-251 {
  border-top-right-radius: 251px !important;
}

.mt-251 {
  margin-top: 251px !important;
}

.mb-251 {
  margin-bottom: 251px !important;
}

.mr-251 {
  margin-right: 251px !important;
}

.ml-251 {
  margin-left: 251px !important;
}

.mx-251 {
  margin-left: 251px !important;
  margin-right: 251px !important;
}

.my-251 {
  margin-top: 251px !important;
  margin-bottom: 251px !important;
}

.pt-251 {
  padding-top: 251px !important;
}

.pb-251 {
  padding-bottom: 251px !important;
}

.pr-251 {
  padding-right: 251px !important;
}

.pl-251 {
  padding-left: 251px !important;
}

.px-251 {
  padding-left: 251px !important;
  padding-right: 251px !important;
}

.py-251 {
  padding-top: 251px !important;
  padding-bottom: 251px !important;
}

.p-251 {
  padding: 251px !important;
}

.m-251 {
  margin: 251px !important;
}

.w-251 {
  width: 251%!important;
}

.lb-rounded-252 {
  border-bottom-left-radius: 252px !important;
}

.minh-252 {
  min-height: 252px !important;
}

.rb-rounded-252 {
  border-bottom-right-radius: 252px !important;
}

.lt-rounded-252 {
  border-top-left-radius: 252px !important;
}

.rt-rounded-252 {
  border-top-right-radius: 252px !important;
}

.mt-252 {
  margin-top: 252px !important;
}

.mb-252 {
  margin-bottom: 252px !important;
}

.mr-252 {
  margin-right: 252px !important;
}

.ml-252 {
  margin-left: 252px !important;
}

.mx-252 {
  margin-left: 252px !important;
  margin-right: 252px !important;
}

.my-252 {
  margin-top: 252px !important;
  margin-bottom: 252px !important;
}

.pt-252 {
  padding-top: 252px !important;
}

.pb-252 {
  padding-bottom: 252px !important;
}

.pr-252 {
  padding-right: 252px !important;
}

.pl-252 {
  padding-left: 252px !important;
}

.px-252 {
  padding-left: 252px !important;
  padding-right: 252px !important;
}

.py-252 {
  padding-top: 252px !important;
  padding-bottom: 252px !important;
}

.p-252 {
  padding: 252px !important;
}

.m-252 {
  margin: 252px !important;
}

.w-252 {
  width: 252%!important;
}

.lb-rounded-253 {
  border-bottom-left-radius: 253px !important;
}

.minh-253 {
  min-height: 253px !important;
}

.rb-rounded-253 {
  border-bottom-right-radius: 253px !important;
}

.lt-rounded-253 {
  border-top-left-radius: 253px !important;
}

.rt-rounded-253 {
  border-top-right-radius: 253px !important;
}

.mt-253 {
  margin-top: 253px !important;
}

.mb-253 {
  margin-bottom: 253px !important;
}

.mr-253 {
  margin-right: 253px !important;
}

.ml-253 {
  margin-left: 253px !important;
}

.mx-253 {
  margin-left: 253px !important;
  margin-right: 253px !important;
}

.my-253 {
  margin-top: 253px !important;
  margin-bottom: 253px !important;
}

.pt-253 {
  padding-top: 253px !important;
}

.pb-253 {
  padding-bottom: 253px !important;
}

.pr-253 {
  padding-right: 253px !important;
}

.pl-253 {
  padding-left: 253px !important;
}

.px-253 {
  padding-left: 253px !important;
  padding-right: 253px !important;
}

.py-253 {
  padding-top: 253px !important;
  padding-bottom: 253px !important;
}

.p-253 {
  padding: 253px !important;
}

.m-253 {
  margin: 253px !important;
}

.w-253 {
  width: 253%!important;
}

.lb-rounded-254 {
  border-bottom-left-radius: 254px !important;
}

.minh-254 {
  min-height: 254px !important;
}

.rb-rounded-254 {
  border-bottom-right-radius: 254px !important;
}

.lt-rounded-254 {
  border-top-left-radius: 254px !important;
}

.rt-rounded-254 {
  border-top-right-radius: 254px !important;
}

.mt-254 {
  margin-top: 254px !important;
}

.mb-254 {
  margin-bottom: 254px !important;
}

.mr-254 {
  margin-right: 254px !important;
}

.ml-254 {
  margin-left: 254px !important;
}

.mx-254 {
  margin-left: 254px !important;
  margin-right: 254px !important;
}

.my-254 {
  margin-top: 254px !important;
  margin-bottom: 254px !important;
}

.pt-254 {
  padding-top: 254px !important;
}

.pb-254 {
  padding-bottom: 254px !important;
}

.pr-254 {
  padding-right: 254px !important;
}

.pl-254 {
  padding-left: 254px !important;
}

.px-254 {
  padding-left: 254px !important;
  padding-right: 254px !important;
}

.py-254 {
  padding-top: 254px !important;
  padding-bottom: 254px !important;
}

.p-254 {
  padding: 254px !important;
}

.m-254 {
  margin: 254px !important;
}

.w-254 {
  width: 254%!important;
}

.lb-rounded-255 {
  border-bottom-left-radius: 255px !important;
}

.minh-255 {
  min-height: 255px !important;
}

.rb-rounded-255 {
  border-bottom-right-radius: 255px !important;
}

.lt-rounded-255 {
  border-top-left-radius: 255px !important;
}

.rt-rounded-255 {
  border-top-right-radius: 255px !important;
}

.mt-255 {
  margin-top: 255px !important;
}

.mb-255 {
  margin-bottom: 255px !important;
}

.mr-255 {
  margin-right: 255px !important;
}

.ml-255 {
  margin-left: 255px !important;
}

.mx-255 {
  margin-left: 255px !important;
  margin-right: 255px !important;
}

.my-255 {
  margin-top: 255px !important;
  margin-bottom: 255px !important;
}

.pt-255 {
  padding-top: 255px !important;
}

.pb-255 {
  padding-bottom: 255px !important;
}

.pr-255 {
  padding-right: 255px !important;
}

.pl-255 {
  padding-left: 255px !important;
}

.px-255 {
  padding-left: 255px !important;
  padding-right: 255px !important;
}

.py-255 {
  padding-top: 255px !important;
  padding-bottom: 255px !important;
}

.p-255 {
  padding: 255px !important;
}

.m-255 {
  margin: 255px !important;
}

.w-255 {
  width: 255%!important;
}

.lb-rounded-256 {
  border-bottom-left-radius: 256px !important;
}

.minh-256 {
  min-height: 256px !important;
}

.rb-rounded-256 {
  border-bottom-right-radius: 256px !important;
}

.lt-rounded-256 {
  border-top-left-radius: 256px !important;
}

.rt-rounded-256 {
  border-top-right-radius: 256px !important;
}

.mt-256 {
  margin-top: 256px !important;
}

.mb-256 {
  margin-bottom: 256px !important;
}

.mr-256 {
  margin-right: 256px !important;
}

.ml-256 {
  margin-left: 256px !important;
}

.mx-256 {
  margin-left: 256px !important;
  margin-right: 256px !important;
}

.my-256 {
  margin-top: 256px !important;
  margin-bottom: 256px !important;
}

.pt-256 {
  padding-top: 256px !important;
}

.pb-256 {
  padding-bottom: 256px !important;
}

.pr-256 {
  padding-right: 256px !important;
}

.pl-256 {
  padding-left: 256px !important;
}

.px-256 {
  padding-left: 256px !important;
  padding-right: 256px !important;
}

.py-256 {
  padding-top: 256px !important;
  padding-bottom: 256px !important;
}

.p-256 {
  padding: 256px !important;
}

.m-256 {
  margin: 256px !important;
}

.w-256 {
  width: 256%!important;
}

.lb-rounded-257 {
  border-bottom-left-radius: 257px !important;
}

.minh-257 {
  min-height: 257px !important;
}

.rb-rounded-257 {
  border-bottom-right-radius: 257px !important;
}

.lt-rounded-257 {
  border-top-left-radius: 257px !important;
}

.rt-rounded-257 {
  border-top-right-radius: 257px !important;
}

.mt-257 {
  margin-top: 257px !important;
}

.mb-257 {
  margin-bottom: 257px !important;
}

.mr-257 {
  margin-right: 257px !important;
}

.ml-257 {
  margin-left: 257px !important;
}

.mx-257 {
  margin-left: 257px !important;
  margin-right: 257px !important;
}

.my-257 {
  margin-top: 257px !important;
  margin-bottom: 257px !important;
}

.pt-257 {
  padding-top: 257px !important;
}

.pb-257 {
  padding-bottom: 257px !important;
}

.pr-257 {
  padding-right: 257px !important;
}

.pl-257 {
  padding-left: 257px !important;
}

.px-257 {
  padding-left: 257px !important;
  padding-right: 257px !important;
}

.py-257 {
  padding-top: 257px !important;
  padding-bottom: 257px !important;
}

.p-257 {
  padding: 257px !important;
}

.m-257 {
  margin: 257px !important;
}

.w-257 {
  width: 257%!important;
}

.lb-rounded-258 {
  border-bottom-left-radius: 258px !important;
}

.minh-258 {
  min-height: 258px !important;
}

.rb-rounded-258 {
  border-bottom-right-radius: 258px !important;
}

.lt-rounded-258 {
  border-top-left-radius: 258px !important;
}

.rt-rounded-258 {
  border-top-right-radius: 258px !important;
}

.mt-258 {
  margin-top: 258px !important;
}

.mb-258 {
  margin-bottom: 258px !important;
}

.mr-258 {
  margin-right: 258px !important;
}

.ml-258 {
  margin-left: 258px !important;
}

.mx-258 {
  margin-left: 258px !important;
  margin-right: 258px !important;
}

.my-258 {
  margin-top: 258px !important;
  margin-bottom: 258px !important;
}

.pt-258 {
  padding-top: 258px !important;
}

.pb-258 {
  padding-bottom: 258px !important;
}

.pr-258 {
  padding-right: 258px !important;
}

.pl-258 {
  padding-left: 258px !important;
}

.px-258 {
  padding-left: 258px !important;
  padding-right: 258px !important;
}

.py-258 {
  padding-top: 258px !important;
  padding-bottom: 258px !important;
}

.p-258 {
  padding: 258px !important;
}

.m-258 {
  margin: 258px !important;
}

.w-258 {
  width: 258%!important;
}

.lb-rounded-259 {
  border-bottom-left-radius: 259px !important;
}

.minh-259 {
  min-height: 259px !important;
}

.rb-rounded-259 {
  border-bottom-right-radius: 259px !important;
}

.lt-rounded-259 {
  border-top-left-radius: 259px !important;
}

.rt-rounded-259 {
  border-top-right-radius: 259px !important;
}

.mt-259 {
  margin-top: 259px !important;
}

.mb-259 {
  margin-bottom: 259px !important;
}

.mr-259 {
  margin-right: 259px !important;
}

.ml-259 {
  margin-left: 259px !important;
}

.mx-259 {
  margin-left: 259px !important;
  margin-right: 259px !important;
}

.my-259 {
  margin-top: 259px !important;
  margin-bottom: 259px !important;
}

.pt-259 {
  padding-top: 259px !important;
}

.pb-259 {
  padding-bottom: 259px !important;
}

.pr-259 {
  padding-right: 259px !important;
}

.pl-259 {
  padding-left: 259px !important;
}

.px-259 {
  padding-left: 259px !important;
  padding-right: 259px !important;
}

.py-259 {
  padding-top: 259px !important;
  padding-bottom: 259px !important;
}

.p-259 {
  padding: 259px !important;
}

.m-259 {
  margin: 259px !important;
}

.w-259 {
  width: 259%!important;
}

.lb-rounded-260 {
  border-bottom-left-radius: 260px !important;
}

.minh-260 {
  min-height: 260px !important;
}

.rb-rounded-260 {
  border-bottom-right-radius: 260px !important;
}

.lt-rounded-260 {
  border-top-left-radius: 260px !important;
}

.rt-rounded-260 {
  border-top-right-radius: 260px !important;
}

.mt-260 {
  margin-top: 260px !important;
}

.mb-260 {
  margin-bottom: 260px !important;
}

.mr-260 {
  margin-right: 260px !important;
}

.ml-260 {
  margin-left: 260px !important;
}

.mx-260 {
  margin-left: 260px !important;
  margin-right: 260px !important;
}

.my-260 {
  margin-top: 260px !important;
  margin-bottom: 260px !important;
}

.pt-260 {
  padding-top: 260px !important;
}

.pb-260 {
  padding-bottom: 260px !important;
}

.pr-260 {
  padding-right: 260px !important;
}

.pl-260 {
  padding-left: 260px !important;
}

.px-260 {
  padding-left: 260px !important;
  padding-right: 260px !important;
}

.py-260 {
  padding-top: 260px !important;
  padding-bottom: 260px !important;
}

.p-260 {
  padding: 260px !important;
}

.m-260 {
  margin: 260px !important;
}

.w-260 {
  width: 260%!important;
}

.lb-rounded-261 {
  border-bottom-left-radius: 261px !important;
}

.minh-261 {
  min-height: 261px !important;
}

.rb-rounded-261 {
  border-bottom-right-radius: 261px !important;
}

.lt-rounded-261 {
  border-top-left-radius: 261px !important;
}

.rt-rounded-261 {
  border-top-right-radius: 261px !important;
}

.mt-261 {
  margin-top: 261px !important;
}

.mb-261 {
  margin-bottom: 261px !important;
}

.mr-261 {
  margin-right: 261px !important;
}

.ml-261 {
  margin-left: 261px !important;
}

.mx-261 {
  margin-left: 261px !important;
  margin-right: 261px !important;
}

.my-261 {
  margin-top: 261px !important;
  margin-bottom: 261px !important;
}

.pt-261 {
  padding-top: 261px !important;
}

.pb-261 {
  padding-bottom: 261px !important;
}

.pr-261 {
  padding-right: 261px !important;
}

.pl-261 {
  padding-left: 261px !important;
}

.px-261 {
  padding-left: 261px !important;
  padding-right: 261px !important;
}

.py-261 {
  padding-top: 261px !important;
  padding-bottom: 261px !important;
}

.p-261 {
  padding: 261px !important;
}

.m-261 {
  margin: 261px !important;
}

.w-261 {
  width: 261%!important;
}

.lb-rounded-262 {
  border-bottom-left-radius: 262px !important;
}

.minh-262 {
  min-height: 262px !important;
}

.rb-rounded-262 {
  border-bottom-right-radius: 262px !important;
}

.lt-rounded-262 {
  border-top-left-radius: 262px !important;
}

.rt-rounded-262 {
  border-top-right-radius: 262px !important;
}

.mt-262 {
  margin-top: 262px !important;
}

.mb-262 {
  margin-bottom: 262px !important;
}

.mr-262 {
  margin-right: 262px !important;
}

.ml-262 {
  margin-left: 262px !important;
}

.mx-262 {
  margin-left: 262px !important;
  margin-right: 262px !important;
}

.my-262 {
  margin-top: 262px !important;
  margin-bottom: 262px !important;
}

.pt-262 {
  padding-top: 262px !important;
}

.pb-262 {
  padding-bottom: 262px !important;
}

.pr-262 {
  padding-right: 262px !important;
}

.pl-262 {
  padding-left: 262px !important;
}

.px-262 {
  padding-left: 262px !important;
  padding-right: 262px !important;
}

.py-262 {
  padding-top: 262px !important;
  padding-bottom: 262px !important;
}

.p-262 {
  padding: 262px !important;
}

.m-262 {
  margin: 262px !important;
}

.w-262 {
  width: 262%!important;
}

.lb-rounded-263 {
  border-bottom-left-radius: 263px !important;
}

.minh-263 {
  min-height: 263px !important;
}

.rb-rounded-263 {
  border-bottom-right-radius: 263px !important;
}

.lt-rounded-263 {
  border-top-left-radius: 263px !important;
}

.rt-rounded-263 {
  border-top-right-radius: 263px !important;
}

.mt-263 {
  margin-top: 263px !important;
}

.mb-263 {
  margin-bottom: 263px !important;
}

.mr-263 {
  margin-right: 263px !important;
}

.ml-263 {
  margin-left: 263px !important;
}

.mx-263 {
  margin-left: 263px !important;
  margin-right: 263px !important;
}

.my-263 {
  margin-top: 263px !important;
  margin-bottom: 263px !important;
}

.pt-263 {
  padding-top: 263px !important;
}

.pb-263 {
  padding-bottom: 263px !important;
}

.pr-263 {
  padding-right: 263px !important;
}

.pl-263 {
  padding-left: 263px !important;
}

.px-263 {
  padding-left: 263px !important;
  padding-right: 263px !important;
}

.py-263 {
  padding-top: 263px !important;
  padding-bottom: 263px !important;
}

.p-263 {
  padding: 263px !important;
}

.m-263 {
  margin: 263px !important;
}

.w-263 {
  width: 263%!important;
}

.lb-rounded-264 {
  border-bottom-left-radius: 264px !important;
}

.minh-264 {
  min-height: 264px !important;
}

.rb-rounded-264 {
  border-bottom-right-radius: 264px !important;
}

.lt-rounded-264 {
  border-top-left-radius: 264px !important;
}

.rt-rounded-264 {
  border-top-right-radius: 264px !important;
}

.mt-264 {
  margin-top: 264px !important;
}

.mb-264 {
  margin-bottom: 264px !important;
}

.mr-264 {
  margin-right: 264px !important;
}

.ml-264 {
  margin-left: 264px !important;
}

.mx-264 {
  margin-left: 264px !important;
  margin-right: 264px !important;
}

.my-264 {
  margin-top: 264px !important;
  margin-bottom: 264px !important;
}

.pt-264 {
  padding-top: 264px !important;
}

.pb-264 {
  padding-bottom: 264px !important;
}

.pr-264 {
  padding-right: 264px !important;
}

.pl-264 {
  padding-left: 264px !important;
}

.px-264 {
  padding-left: 264px !important;
  padding-right: 264px !important;
}

.py-264 {
  padding-top: 264px !important;
  padding-bottom: 264px !important;
}

.p-264 {
  padding: 264px !important;
}

.m-264 {
  margin: 264px !important;
}

.w-264 {
  width: 264%!important;
}

.lb-rounded-265 {
  border-bottom-left-radius: 265px !important;
}

.minh-265 {
  min-height: 265px !important;
}

.rb-rounded-265 {
  border-bottom-right-radius: 265px !important;
}

.lt-rounded-265 {
  border-top-left-radius: 265px !important;
}

.rt-rounded-265 {
  border-top-right-radius: 265px !important;
}

.mt-265 {
  margin-top: 265px !important;
}

.mb-265 {
  margin-bottom: 265px !important;
}

.mr-265 {
  margin-right: 265px !important;
}

.ml-265 {
  margin-left: 265px !important;
}

.mx-265 {
  margin-left: 265px !important;
  margin-right: 265px !important;
}

.my-265 {
  margin-top: 265px !important;
  margin-bottom: 265px !important;
}

.pt-265 {
  padding-top: 265px !important;
}

.pb-265 {
  padding-bottom: 265px !important;
}

.pr-265 {
  padding-right: 265px !important;
}

.pl-265 {
  padding-left: 265px !important;
}

.px-265 {
  padding-left: 265px !important;
  padding-right: 265px !important;
}

.py-265 {
  padding-top: 265px !important;
  padding-bottom: 265px !important;
}

.p-265 {
  padding: 265px !important;
}

.m-265 {
  margin: 265px !important;
}

.w-265 {
  width: 265%!important;
}

.lb-rounded-266 {
  border-bottom-left-radius: 266px !important;
}

.minh-266 {
  min-height: 266px !important;
}

.rb-rounded-266 {
  border-bottom-right-radius: 266px !important;
}

.lt-rounded-266 {
  border-top-left-radius: 266px !important;
}

.rt-rounded-266 {
  border-top-right-radius: 266px !important;
}

.mt-266 {
  margin-top: 266px !important;
}

.mb-266 {
  margin-bottom: 266px !important;
}

.mr-266 {
  margin-right: 266px !important;
}

.ml-266 {
  margin-left: 266px !important;
}

.mx-266 {
  margin-left: 266px !important;
  margin-right: 266px !important;
}

.my-266 {
  margin-top: 266px !important;
  margin-bottom: 266px !important;
}

.pt-266 {
  padding-top: 266px !important;
}

.pb-266 {
  padding-bottom: 266px !important;
}

.pr-266 {
  padding-right: 266px !important;
}

.pl-266 {
  padding-left: 266px !important;
}

.px-266 {
  padding-left: 266px !important;
  padding-right: 266px !important;
}

.py-266 {
  padding-top: 266px !important;
  padding-bottom: 266px !important;
}

.p-266 {
  padding: 266px !important;
}

.m-266 {
  margin: 266px !important;
}

.w-266 {
  width: 266%!important;
}

.lb-rounded-267 {
  border-bottom-left-radius: 267px !important;
}

.minh-267 {
  min-height: 267px !important;
}

.rb-rounded-267 {
  border-bottom-right-radius: 267px !important;
}

.lt-rounded-267 {
  border-top-left-radius: 267px !important;
}

.rt-rounded-267 {
  border-top-right-radius: 267px !important;
}

.mt-267 {
  margin-top: 267px !important;
}

.mb-267 {
  margin-bottom: 267px !important;
}

.mr-267 {
  margin-right: 267px !important;
}

.ml-267 {
  margin-left: 267px !important;
}

.mx-267 {
  margin-left: 267px !important;
  margin-right: 267px !important;
}

.my-267 {
  margin-top: 267px !important;
  margin-bottom: 267px !important;
}

.pt-267 {
  padding-top: 267px !important;
}

.pb-267 {
  padding-bottom: 267px !important;
}

.pr-267 {
  padding-right: 267px !important;
}

.pl-267 {
  padding-left: 267px !important;
}

.px-267 {
  padding-left: 267px !important;
  padding-right: 267px !important;
}

.py-267 {
  padding-top: 267px !important;
  padding-bottom: 267px !important;
}

.p-267 {
  padding: 267px !important;
}

.m-267 {
  margin: 267px !important;
}

.w-267 {
  width: 267%!important;
}

.lb-rounded-268 {
  border-bottom-left-radius: 268px !important;
}

.minh-268 {
  min-height: 268px !important;
}

.rb-rounded-268 {
  border-bottom-right-radius: 268px !important;
}

.lt-rounded-268 {
  border-top-left-radius: 268px !important;
}

.rt-rounded-268 {
  border-top-right-radius: 268px !important;
}

.mt-268 {
  margin-top: 268px !important;
}

.mb-268 {
  margin-bottom: 268px !important;
}

.mr-268 {
  margin-right: 268px !important;
}

.ml-268 {
  margin-left: 268px !important;
}

.mx-268 {
  margin-left: 268px !important;
  margin-right: 268px !important;
}

.my-268 {
  margin-top: 268px !important;
  margin-bottom: 268px !important;
}

.pt-268 {
  padding-top: 268px !important;
}

.pb-268 {
  padding-bottom: 268px !important;
}

.pr-268 {
  padding-right: 268px !important;
}

.pl-268 {
  padding-left: 268px !important;
}

.px-268 {
  padding-left: 268px !important;
  padding-right: 268px !important;
}

.py-268 {
  padding-top: 268px !important;
  padding-bottom: 268px !important;
}

.p-268 {
  padding: 268px !important;
}

.m-268 {
  margin: 268px !important;
}

.w-268 {
  width: 268%!important;
}

.lb-rounded-269 {
  border-bottom-left-radius: 269px !important;
}

.minh-269 {
  min-height: 269px !important;
}

.rb-rounded-269 {
  border-bottom-right-radius: 269px !important;
}

.lt-rounded-269 {
  border-top-left-radius: 269px !important;
}

.rt-rounded-269 {
  border-top-right-radius: 269px !important;
}

.mt-269 {
  margin-top: 269px !important;
}

.mb-269 {
  margin-bottom: 269px !important;
}

.mr-269 {
  margin-right: 269px !important;
}

.ml-269 {
  margin-left: 269px !important;
}

.mx-269 {
  margin-left: 269px !important;
  margin-right: 269px !important;
}

.my-269 {
  margin-top: 269px !important;
  margin-bottom: 269px !important;
}

.pt-269 {
  padding-top: 269px !important;
}

.pb-269 {
  padding-bottom: 269px !important;
}

.pr-269 {
  padding-right: 269px !important;
}

.pl-269 {
  padding-left: 269px !important;
}

.px-269 {
  padding-left: 269px !important;
  padding-right: 269px !important;
}

.py-269 {
  padding-top: 269px !important;
  padding-bottom: 269px !important;
}

.p-269 {
  padding: 269px !important;
}

.m-269 {
  margin: 269px !important;
}

.w-269 {
  width: 269%!important;
}

.lb-rounded-270 {
  border-bottom-left-radius: 270px !important;
}

.minh-270 {
  min-height: 270px !important;
}

.rb-rounded-270 {
  border-bottom-right-radius: 270px !important;
}

.lt-rounded-270 {
  border-top-left-radius: 270px !important;
}

.rt-rounded-270 {
  border-top-right-radius: 270px !important;
}

.mt-270 {
  margin-top: 270px !important;
}

.mb-270 {
  margin-bottom: 270px !important;
}

.mr-270 {
  margin-right: 270px !important;
}

.ml-270 {
  margin-left: 270px !important;
}

.mx-270 {
  margin-left: 270px !important;
  margin-right: 270px !important;
}

.my-270 {
  margin-top: 270px !important;
  margin-bottom: 270px !important;
}

.pt-270 {
  padding-top: 270px !important;
}

.pb-270 {
  padding-bottom: 270px !important;
}

.pr-270 {
  padding-right: 270px !important;
}

.pl-270 {
  padding-left: 270px !important;
}

.px-270 {
  padding-left: 270px !important;
  padding-right: 270px !important;
}

.py-270 {
  padding-top: 270px !important;
  padding-bottom: 270px !important;
}

.p-270 {
  padding: 270px !important;
}

.m-270 {
  margin: 270px !important;
}

.w-270 {
  width: 270%!important;
}

.lb-rounded-271 {
  border-bottom-left-radius: 271px !important;
}

.minh-271 {
  min-height: 271px !important;
}

.rb-rounded-271 {
  border-bottom-right-radius: 271px !important;
}

.lt-rounded-271 {
  border-top-left-radius: 271px !important;
}

.rt-rounded-271 {
  border-top-right-radius: 271px !important;
}

.mt-271 {
  margin-top: 271px !important;
}

.mb-271 {
  margin-bottom: 271px !important;
}

.mr-271 {
  margin-right: 271px !important;
}

.ml-271 {
  margin-left: 271px !important;
}

.mx-271 {
  margin-left: 271px !important;
  margin-right: 271px !important;
}

.my-271 {
  margin-top: 271px !important;
  margin-bottom: 271px !important;
}

.pt-271 {
  padding-top: 271px !important;
}

.pb-271 {
  padding-bottom: 271px !important;
}

.pr-271 {
  padding-right: 271px !important;
}

.pl-271 {
  padding-left: 271px !important;
}

.px-271 {
  padding-left: 271px !important;
  padding-right: 271px !important;
}

.py-271 {
  padding-top: 271px !important;
  padding-bottom: 271px !important;
}

.p-271 {
  padding: 271px !important;
}

.m-271 {
  margin: 271px !important;
}

.w-271 {
  width: 271%!important;
}

.lb-rounded-272 {
  border-bottom-left-radius: 272px !important;
}

.minh-272 {
  min-height: 272px !important;
}

.rb-rounded-272 {
  border-bottom-right-radius: 272px !important;
}

.lt-rounded-272 {
  border-top-left-radius: 272px !important;
}

.rt-rounded-272 {
  border-top-right-radius: 272px !important;
}

.mt-272 {
  margin-top: 272px !important;
}

.mb-272 {
  margin-bottom: 272px !important;
}

.mr-272 {
  margin-right: 272px !important;
}

.ml-272 {
  margin-left: 272px !important;
}

.mx-272 {
  margin-left: 272px !important;
  margin-right: 272px !important;
}

.my-272 {
  margin-top: 272px !important;
  margin-bottom: 272px !important;
}

.pt-272 {
  padding-top: 272px !important;
}

.pb-272 {
  padding-bottom: 272px !important;
}

.pr-272 {
  padding-right: 272px !important;
}

.pl-272 {
  padding-left: 272px !important;
}

.px-272 {
  padding-left: 272px !important;
  padding-right: 272px !important;
}

.py-272 {
  padding-top: 272px !important;
  padding-bottom: 272px !important;
}

.p-272 {
  padding: 272px !important;
}

.m-272 {
  margin: 272px !important;
}

.w-272 {
  width: 272%!important;
}

.lb-rounded-273 {
  border-bottom-left-radius: 273px !important;
}

.minh-273 {
  min-height: 273px !important;
}

.rb-rounded-273 {
  border-bottom-right-radius: 273px !important;
}

.lt-rounded-273 {
  border-top-left-radius: 273px !important;
}

.rt-rounded-273 {
  border-top-right-radius: 273px !important;
}

.mt-273 {
  margin-top: 273px !important;
}

.mb-273 {
  margin-bottom: 273px !important;
}

.mr-273 {
  margin-right: 273px !important;
}

.ml-273 {
  margin-left: 273px !important;
}

.mx-273 {
  margin-left: 273px !important;
  margin-right: 273px !important;
}

.my-273 {
  margin-top: 273px !important;
  margin-bottom: 273px !important;
}

.pt-273 {
  padding-top: 273px !important;
}

.pb-273 {
  padding-bottom: 273px !important;
}

.pr-273 {
  padding-right: 273px !important;
}

.pl-273 {
  padding-left: 273px !important;
}

.px-273 {
  padding-left: 273px !important;
  padding-right: 273px !important;
}

.py-273 {
  padding-top: 273px !important;
  padding-bottom: 273px !important;
}

.p-273 {
  padding: 273px !important;
}

.m-273 {
  margin: 273px !important;
}

.w-273 {
  width: 273%!important;
}

.lb-rounded-274 {
  border-bottom-left-radius: 274px !important;
}

.minh-274 {
  min-height: 274px !important;
}

.rb-rounded-274 {
  border-bottom-right-radius: 274px !important;
}

.lt-rounded-274 {
  border-top-left-radius: 274px !important;
}

.rt-rounded-274 {
  border-top-right-radius: 274px !important;
}

.mt-274 {
  margin-top: 274px !important;
}

.mb-274 {
  margin-bottom: 274px !important;
}

.mr-274 {
  margin-right: 274px !important;
}

.ml-274 {
  margin-left: 274px !important;
}

.mx-274 {
  margin-left: 274px !important;
  margin-right: 274px !important;
}

.my-274 {
  margin-top: 274px !important;
  margin-bottom: 274px !important;
}

.pt-274 {
  padding-top: 274px !important;
}

.pb-274 {
  padding-bottom: 274px !important;
}

.pr-274 {
  padding-right: 274px !important;
}

.pl-274 {
  padding-left: 274px !important;
}

.px-274 {
  padding-left: 274px !important;
  padding-right: 274px !important;
}

.py-274 {
  padding-top: 274px !important;
  padding-bottom: 274px !important;
}

.p-274 {
  padding: 274px !important;
}

.m-274 {
  margin: 274px !important;
}

.w-274 {
  width: 274%!important;
}

.lb-rounded-275 {
  border-bottom-left-radius: 275px !important;
}

.minh-275 {
  min-height: 275px !important;
}

.rb-rounded-275 {
  border-bottom-right-radius: 275px !important;
}

.lt-rounded-275 {
  border-top-left-radius: 275px !important;
}

.rt-rounded-275 {
  border-top-right-radius: 275px !important;
}

.mt-275 {
  margin-top: 275px !important;
}

.mb-275 {
  margin-bottom: 275px !important;
}

.mr-275 {
  margin-right: 275px !important;
}

.ml-275 {
  margin-left: 275px !important;
}

.mx-275 {
  margin-left: 275px !important;
  margin-right: 275px !important;
}

.my-275 {
  margin-top: 275px !important;
  margin-bottom: 275px !important;
}

.pt-275 {
  padding-top: 275px !important;
}

.pb-275 {
  padding-bottom: 275px !important;
}

.pr-275 {
  padding-right: 275px !important;
}

.pl-275 {
  padding-left: 275px !important;
}

.px-275 {
  padding-left: 275px !important;
  padding-right: 275px !important;
}

.py-275 {
  padding-top: 275px !important;
  padding-bottom: 275px !important;
}

.p-275 {
  padding: 275px !important;
}

.m-275 {
  margin: 275px !important;
}

.w-275 {
  width: 275%!important;
}

.lb-rounded-276 {
  border-bottom-left-radius: 276px !important;
}

.minh-276 {
  min-height: 276px !important;
}

.rb-rounded-276 {
  border-bottom-right-radius: 276px !important;
}

.lt-rounded-276 {
  border-top-left-radius: 276px !important;
}

.rt-rounded-276 {
  border-top-right-radius: 276px !important;
}

.mt-276 {
  margin-top: 276px !important;
}

.mb-276 {
  margin-bottom: 276px !important;
}

.mr-276 {
  margin-right: 276px !important;
}

.ml-276 {
  margin-left: 276px !important;
}

.mx-276 {
  margin-left: 276px !important;
  margin-right: 276px !important;
}

.my-276 {
  margin-top: 276px !important;
  margin-bottom: 276px !important;
}

.pt-276 {
  padding-top: 276px !important;
}

.pb-276 {
  padding-bottom: 276px !important;
}

.pr-276 {
  padding-right: 276px !important;
}

.pl-276 {
  padding-left: 276px !important;
}

.px-276 {
  padding-left: 276px !important;
  padding-right: 276px !important;
}

.py-276 {
  padding-top: 276px !important;
  padding-bottom: 276px !important;
}

.p-276 {
  padding: 276px !important;
}

.m-276 {
  margin: 276px !important;
}

.w-276 {
  width: 276%!important;
}

.lb-rounded-277 {
  border-bottom-left-radius: 277px !important;
}

.minh-277 {
  min-height: 277px !important;
}

.rb-rounded-277 {
  border-bottom-right-radius: 277px !important;
}

.lt-rounded-277 {
  border-top-left-radius: 277px !important;
}

.rt-rounded-277 {
  border-top-right-radius: 277px !important;
}

.mt-277 {
  margin-top: 277px !important;
}

.mb-277 {
  margin-bottom: 277px !important;
}

.mr-277 {
  margin-right: 277px !important;
}

.ml-277 {
  margin-left: 277px !important;
}

.mx-277 {
  margin-left: 277px !important;
  margin-right: 277px !important;
}

.my-277 {
  margin-top: 277px !important;
  margin-bottom: 277px !important;
}

.pt-277 {
  padding-top: 277px !important;
}

.pb-277 {
  padding-bottom: 277px !important;
}

.pr-277 {
  padding-right: 277px !important;
}

.pl-277 {
  padding-left: 277px !important;
}

.px-277 {
  padding-left: 277px !important;
  padding-right: 277px !important;
}

.py-277 {
  padding-top: 277px !important;
  padding-bottom: 277px !important;
}

.p-277 {
  padding: 277px !important;
}

.m-277 {
  margin: 277px !important;
}

.w-277 {
  width: 277%!important;
}

.lb-rounded-278 {
  border-bottom-left-radius: 278px !important;
}

.minh-278 {
  min-height: 278px !important;
}

.rb-rounded-278 {
  border-bottom-right-radius: 278px !important;
}

.lt-rounded-278 {
  border-top-left-radius: 278px !important;
}

.rt-rounded-278 {
  border-top-right-radius: 278px !important;
}

.mt-278 {
  margin-top: 278px !important;
}

.mb-278 {
  margin-bottom: 278px !important;
}

.mr-278 {
  margin-right: 278px !important;
}

.ml-278 {
  margin-left: 278px !important;
}

.mx-278 {
  margin-left: 278px !important;
  margin-right: 278px !important;
}

.my-278 {
  margin-top: 278px !important;
  margin-bottom: 278px !important;
}

.pt-278 {
  padding-top: 278px !important;
}

.pb-278 {
  padding-bottom: 278px !important;
}

.pr-278 {
  padding-right: 278px !important;
}

.pl-278 {
  padding-left: 278px !important;
}

.px-278 {
  padding-left: 278px !important;
  padding-right: 278px !important;
}

.py-278 {
  padding-top: 278px !important;
  padding-bottom: 278px !important;
}

.p-278 {
  padding: 278px !important;
}

.m-278 {
  margin: 278px !important;
}

.w-278 {
  width: 278%!important;
}

.lb-rounded-279 {
  border-bottom-left-radius: 279px !important;
}

.minh-279 {
  min-height: 279px !important;
}

.rb-rounded-279 {
  border-bottom-right-radius: 279px !important;
}

.lt-rounded-279 {
  border-top-left-radius: 279px !important;
}

.rt-rounded-279 {
  border-top-right-radius: 279px !important;
}

.mt-279 {
  margin-top: 279px !important;
}

.mb-279 {
  margin-bottom: 279px !important;
}

.mr-279 {
  margin-right: 279px !important;
}

.ml-279 {
  margin-left: 279px !important;
}

.mx-279 {
  margin-left: 279px !important;
  margin-right: 279px !important;
}

.my-279 {
  margin-top: 279px !important;
  margin-bottom: 279px !important;
}

.pt-279 {
  padding-top: 279px !important;
}

.pb-279 {
  padding-bottom: 279px !important;
}

.pr-279 {
  padding-right: 279px !important;
}

.pl-279 {
  padding-left: 279px !important;
}

.px-279 {
  padding-left: 279px !important;
  padding-right: 279px !important;
}

.py-279 {
  padding-top: 279px !important;
  padding-bottom: 279px !important;
}

.p-279 {
  padding: 279px !important;
}

.m-279 {
  margin: 279px !important;
}

.w-279 {
  width: 279%!important;
}

.lb-rounded-280 {
  border-bottom-left-radius: 280px !important;
}

.minh-280 {
  min-height: 280px !important;
}

.rb-rounded-280 {
  border-bottom-right-radius: 280px !important;
}

.lt-rounded-280 {
  border-top-left-radius: 280px !important;
}

.rt-rounded-280 {
  border-top-right-radius: 280px !important;
}

.mt-280 {
  margin-top: 280px !important;
}

.mb-280 {
  margin-bottom: 280px !important;
}

.mr-280 {
  margin-right: 280px !important;
}

.ml-280 {
  margin-left: 280px !important;
}

.mx-280 {
  margin-left: 280px !important;
  margin-right: 280px !important;
}

.my-280 {
  margin-top: 280px !important;
  margin-bottom: 280px !important;
}

.pt-280 {
  padding-top: 280px !important;
}

.pb-280 {
  padding-bottom: 280px !important;
}

.pr-280 {
  padding-right: 280px !important;
}

.pl-280 {
  padding-left: 280px !important;
}

.px-280 {
  padding-left: 280px !important;
  padding-right: 280px !important;
}

.py-280 {
  padding-top: 280px !important;
  padding-bottom: 280px !important;
}

.p-280 {
  padding: 280px !important;
}

.m-280 {
  margin: 280px !important;
}

.w-280 {
  width: 280%!important;
}

.lb-rounded-281 {
  border-bottom-left-radius: 281px !important;
}

.minh-281 {
  min-height: 281px !important;
}

.rb-rounded-281 {
  border-bottom-right-radius: 281px !important;
}

.lt-rounded-281 {
  border-top-left-radius: 281px !important;
}

.rt-rounded-281 {
  border-top-right-radius: 281px !important;
}

.mt-281 {
  margin-top: 281px !important;
}

.mb-281 {
  margin-bottom: 281px !important;
}

.mr-281 {
  margin-right: 281px !important;
}

.ml-281 {
  margin-left: 281px !important;
}

.mx-281 {
  margin-left: 281px !important;
  margin-right: 281px !important;
}

.my-281 {
  margin-top: 281px !important;
  margin-bottom: 281px !important;
}

.pt-281 {
  padding-top: 281px !important;
}

.pb-281 {
  padding-bottom: 281px !important;
}

.pr-281 {
  padding-right: 281px !important;
}

.pl-281 {
  padding-left: 281px !important;
}

.px-281 {
  padding-left: 281px !important;
  padding-right: 281px !important;
}

.py-281 {
  padding-top: 281px !important;
  padding-bottom: 281px !important;
}

.p-281 {
  padding: 281px !important;
}

.m-281 {
  margin: 281px !important;
}

.w-281 {
  width: 281%!important;
}

.lb-rounded-282 {
  border-bottom-left-radius: 282px !important;
}

.minh-282 {
  min-height: 282px !important;
}

.rb-rounded-282 {
  border-bottom-right-radius: 282px !important;
}

.lt-rounded-282 {
  border-top-left-radius: 282px !important;
}

.rt-rounded-282 {
  border-top-right-radius: 282px !important;
}

.mt-282 {
  margin-top: 282px !important;
}

.mb-282 {
  margin-bottom: 282px !important;
}

.mr-282 {
  margin-right: 282px !important;
}

.ml-282 {
  margin-left: 282px !important;
}

.mx-282 {
  margin-left: 282px !important;
  margin-right: 282px !important;
}

.my-282 {
  margin-top: 282px !important;
  margin-bottom: 282px !important;
}

.pt-282 {
  padding-top: 282px !important;
}

.pb-282 {
  padding-bottom: 282px !important;
}

.pr-282 {
  padding-right: 282px !important;
}

.pl-282 {
  padding-left: 282px !important;
}

.px-282 {
  padding-left: 282px !important;
  padding-right: 282px !important;
}

.py-282 {
  padding-top: 282px !important;
  padding-bottom: 282px !important;
}

.p-282 {
  padding: 282px !important;
}

.m-282 {
  margin: 282px !important;
}

.w-282 {
  width: 282%!important;
}

.lb-rounded-283 {
  border-bottom-left-radius: 283px !important;
}

.minh-283 {
  min-height: 283px !important;
}

.rb-rounded-283 {
  border-bottom-right-radius: 283px !important;
}

.lt-rounded-283 {
  border-top-left-radius: 283px !important;
}

.rt-rounded-283 {
  border-top-right-radius: 283px !important;
}

.mt-283 {
  margin-top: 283px !important;
}

.mb-283 {
  margin-bottom: 283px !important;
}

.mr-283 {
  margin-right: 283px !important;
}

.ml-283 {
  margin-left: 283px !important;
}

.mx-283 {
  margin-left: 283px !important;
  margin-right: 283px !important;
}

.my-283 {
  margin-top: 283px !important;
  margin-bottom: 283px !important;
}

.pt-283 {
  padding-top: 283px !important;
}

.pb-283 {
  padding-bottom: 283px !important;
}

.pr-283 {
  padding-right: 283px !important;
}

.pl-283 {
  padding-left: 283px !important;
}

.px-283 {
  padding-left: 283px !important;
  padding-right: 283px !important;
}

.py-283 {
  padding-top: 283px !important;
  padding-bottom: 283px !important;
}

.p-283 {
  padding: 283px !important;
}

.m-283 {
  margin: 283px !important;
}

.w-283 {
  width: 283%!important;
}

.lb-rounded-284 {
  border-bottom-left-radius: 284px !important;
}

.minh-284 {
  min-height: 284px !important;
}

.rb-rounded-284 {
  border-bottom-right-radius: 284px !important;
}

.lt-rounded-284 {
  border-top-left-radius: 284px !important;
}

.rt-rounded-284 {
  border-top-right-radius: 284px !important;
}

.mt-284 {
  margin-top: 284px !important;
}

.mb-284 {
  margin-bottom: 284px !important;
}

.mr-284 {
  margin-right: 284px !important;
}

.ml-284 {
  margin-left: 284px !important;
}

.mx-284 {
  margin-left: 284px !important;
  margin-right: 284px !important;
}

.my-284 {
  margin-top: 284px !important;
  margin-bottom: 284px !important;
}

.pt-284 {
  padding-top: 284px !important;
}

.pb-284 {
  padding-bottom: 284px !important;
}

.pr-284 {
  padding-right: 284px !important;
}

.pl-284 {
  padding-left: 284px !important;
}

.px-284 {
  padding-left: 284px !important;
  padding-right: 284px !important;
}

.py-284 {
  padding-top: 284px !important;
  padding-bottom: 284px !important;
}

.p-284 {
  padding: 284px !important;
}

.m-284 {
  margin: 284px !important;
}

.w-284 {
  width: 284%!important;
}

.lb-rounded-285 {
  border-bottom-left-radius: 285px !important;
}

.minh-285 {
  min-height: 285px !important;
}

.rb-rounded-285 {
  border-bottom-right-radius: 285px !important;
}

.lt-rounded-285 {
  border-top-left-radius: 285px !important;
}

.rt-rounded-285 {
  border-top-right-radius: 285px !important;
}

.mt-285 {
  margin-top: 285px !important;
}

.mb-285 {
  margin-bottom: 285px !important;
}

.mr-285 {
  margin-right: 285px !important;
}

.ml-285 {
  margin-left: 285px !important;
}

.mx-285 {
  margin-left: 285px !important;
  margin-right: 285px !important;
}

.my-285 {
  margin-top: 285px !important;
  margin-bottom: 285px !important;
}

.pt-285 {
  padding-top: 285px !important;
}

.pb-285 {
  padding-bottom: 285px !important;
}

.pr-285 {
  padding-right: 285px !important;
}

.pl-285 {
  padding-left: 285px !important;
}

.px-285 {
  padding-left: 285px !important;
  padding-right: 285px !important;
}

.py-285 {
  padding-top: 285px !important;
  padding-bottom: 285px !important;
}

.p-285 {
  padding: 285px !important;
}

.m-285 {
  margin: 285px !important;
}

.w-285 {
  width: 285%!important;
}

.lb-rounded-286 {
  border-bottom-left-radius: 286px !important;
}

.minh-286 {
  min-height: 286px !important;
}

.rb-rounded-286 {
  border-bottom-right-radius: 286px !important;
}

.lt-rounded-286 {
  border-top-left-radius: 286px !important;
}

.rt-rounded-286 {
  border-top-right-radius: 286px !important;
}

.mt-286 {
  margin-top: 286px !important;
}

.mb-286 {
  margin-bottom: 286px !important;
}

.mr-286 {
  margin-right: 286px !important;
}

.ml-286 {
  margin-left: 286px !important;
}

.mx-286 {
  margin-left: 286px !important;
  margin-right: 286px !important;
}

.my-286 {
  margin-top: 286px !important;
  margin-bottom: 286px !important;
}

.pt-286 {
  padding-top: 286px !important;
}

.pb-286 {
  padding-bottom: 286px !important;
}

.pr-286 {
  padding-right: 286px !important;
}

.pl-286 {
  padding-left: 286px !important;
}

.px-286 {
  padding-left: 286px !important;
  padding-right: 286px !important;
}

.py-286 {
  padding-top: 286px !important;
  padding-bottom: 286px !important;
}

.p-286 {
  padding: 286px !important;
}

.m-286 {
  margin: 286px !important;
}

.w-286 {
  width: 286%!important;
}

.lb-rounded-287 {
  border-bottom-left-radius: 287px !important;
}

.minh-287 {
  min-height: 287px !important;
}

.rb-rounded-287 {
  border-bottom-right-radius: 287px !important;
}

.lt-rounded-287 {
  border-top-left-radius: 287px !important;
}

.rt-rounded-287 {
  border-top-right-radius: 287px !important;
}

.mt-287 {
  margin-top: 287px !important;
}

.mb-287 {
  margin-bottom: 287px !important;
}

.mr-287 {
  margin-right: 287px !important;
}

.ml-287 {
  margin-left: 287px !important;
}

.mx-287 {
  margin-left: 287px !important;
  margin-right: 287px !important;
}

.my-287 {
  margin-top: 287px !important;
  margin-bottom: 287px !important;
}

.pt-287 {
  padding-top: 287px !important;
}

.pb-287 {
  padding-bottom: 287px !important;
}

.pr-287 {
  padding-right: 287px !important;
}

.pl-287 {
  padding-left: 287px !important;
}

.px-287 {
  padding-left: 287px !important;
  padding-right: 287px !important;
}

.py-287 {
  padding-top: 287px !important;
  padding-bottom: 287px !important;
}

.p-287 {
  padding: 287px !important;
}

.m-287 {
  margin: 287px !important;
}

.w-287 {
  width: 287%!important;
}

.lb-rounded-288 {
  border-bottom-left-radius: 288px !important;
}

.minh-288 {
  min-height: 288px !important;
}

.rb-rounded-288 {
  border-bottom-right-radius: 288px !important;
}

.lt-rounded-288 {
  border-top-left-radius: 288px !important;
}

.rt-rounded-288 {
  border-top-right-radius: 288px !important;
}

.mt-288 {
  margin-top: 288px !important;
}

.mb-288 {
  margin-bottom: 288px !important;
}

.mr-288 {
  margin-right: 288px !important;
}

.ml-288 {
  margin-left: 288px !important;
}

.mx-288 {
  margin-left: 288px !important;
  margin-right: 288px !important;
}

.my-288 {
  margin-top: 288px !important;
  margin-bottom: 288px !important;
}

.pt-288 {
  padding-top: 288px !important;
}

.pb-288 {
  padding-bottom: 288px !important;
}

.pr-288 {
  padding-right: 288px !important;
}

.pl-288 {
  padding-left: 288px !important;
}

.px-288 {
  padding-left: 288px !important;
  padding-right: 288px !important;
}

.py-288 {
  padding-top: 288px !important;
  padding-bottom: 288px !important;
}

.p-288 {
  padding: 288px !important;
}

.m-288 {
  margin: 288px !important;
}

.w-288 {
  width: 288%!important;
}

.lb-rounded-289 {
  border-bottom-left-radius: 289px !important;
}

.minh-289 {
  min-height: 289px !important;
}

.rb-rounded-289 {
  border-bottom-right-radius: 289px !important;
}

.lt-rounded-289 {
  border-top-left-radius: 289px !important;
}

.rt-rounded-289 {
  border-top-right-radius: 289px !important;
}

.mt-289 {
  margin-top: 289px !important;
}

.mb-289 {
  margin-bottom: 289px !important;
}

.mr-289 {
  margin-right: 289px !important;
}

.ml-289 {
  margin-left: 289px !important;
}

.mx-289 {
  margin-left: 289px !important;
  margin-right: 289px !important;
}

.my-289 {
  margin-top: 289px !important;
  margin-bottom: 289px !important;
}

.pt-289 {
  padding-top: 289px !important;
}

.pb-289 {
  padding-bottom: 289px !important;
}

.pr-289 {
  padding-right: 289px !important;
}

.pl-289 {
  padding-left: 289px !important;
}

.px-289 {
  padding-left: 289px !important;
  padding-right: 289px !important;
}

.py-289 {
  padding-top: 289px !important;
  padding-bottom: 289px !important;
}

.p-289 {
  padding: 289px !important;
}

.m-289 {
  margin: 289px !important;
}

.w-289 {
  width: 289%!important;
}

.lb-rounded-290 {
  border-bottom-left-radius: 290px !important;
}

.minh-290 {
  min-height: 290px !important;
}

.rb-rounded-290 {
  border-bottom-right-radius: 290px !important;
}

.lt-rounded-290 {
  border-top-left-radius: 290px !important;
}

.rt-rounded-290 {
  border-top-right-radius: 290px !important;
}

.mt-290 {
  margin-top: 290px !important;
}

.mb-290 {
  margin-bottom: 290px !important;
}

.mr-290 {
  margin-right: 290px !important;
}

.ml-290 {
  margin-left: 290px !important;
}

.mx-290 {
  margin-left: 290px !important;
  margin-right: 290px !important;
}

.my-290 {
  margin-top: 290px !important;
  margin-bottom: 290px !important;
}

.pt-290 {
  padding-top: 290px !important;
}

.pb-290 {
  padding-bottom: 290px !important;
}

.pr-290 {
  padding-right: 290px !important;
}

.pl-290 {
  padding-left: 290px !important;
}

.px-290 {
  padding-left: 290px !important;
  padding-right: 290px !important;
}

.py-290 {
  padding-top: 290px !important;
  padding-bottom: 290px !important;
}

.p-290 {
  padding: 290px !important;
}

.m-290 {
  margin: 290px !important;
}

.w-290 {
  width: 290%!important;
}

.lb-rounded-291 {
  border-bottom-left-radius: 291px !important;
}

.minh-291 {
  min-height: 291px !important;
}

.rb-rounded-291 {
  border-bottom-right-radius: 291px !important;
}

.lt-rounded-291 {
  border-top-left-radius: 291px !important;
}

.rt-rounded-291 {
  border-top-right-radius: 291px !important;
}

.mt-291 {
  margin-top: 291px !important;
}

.mb-291 {
  margin-bottom: 291px !important;
}

.mr-291 {
  margin-right: 291px !important;
}

.ml-291 {
  margin-left: 291px !important;
}

.mx-291 {
  margin-left: 291px !important;
  margin-right: 291px !important;
}

.my-291 {
  margin-top: 291px !important;
  margin-bottom: 291px !important;
}

.pt-291 {
  padding-top: 291px !important;
}

.pb-291 {
  padding-bottom: 291px !important;
}

.pr-291 {
  padding-right: 291px !important;
}

.pl-291 {
  padding-left: 291px !important;
}

.px-291 {
  padding-left: 291px !important;
  padding-right: 291px !important;
}

.py-291 {
  padding-top: 291px !important;
  padding-bottom: 291px !important;
}

.p-291 {
  padding: 291px !important;
}

.m-291 {
  margin: 291px !important;
}

.w-291 {
  width: 291%!important;
}

.lb-rounded-292 {
  border-bottom-left-radius: 292px !important;
}

.minh-292 {
  min-height: 292px !important;
}

.rb-rounded-292 {
  border-bottom-right-radius: 292px !important;
}

.lt-rounded-292 {
  border-top-left-radius: 292px !important;
}

.rt-rounded-292 {
  border-top-right-radius: 292px !important;
}

.mt-292 {
  margin-top: 292px !important;
}

.mb-292 {
  margin-bottom: 292px !important;
}

.mr-292 {
  margin-right: 292px !important;
}

.ml-292 {
  margin-left: 292px !important;
}

.mx-292 {
  margin-left: 292px !important;
  margin-right: 292px !important;
}

.my-292 {
  margin-top: 292px !important;
  margin-bottom: 292px !important;
}

.pt-292 {
  padding-top: 292px !important;
}

.pb-292 {
  padding-bottom: 292px !important;
}

.pr-292 {
  padding-right: 292px !important;
}

.pl-292 {
  padding-left: 292px !important;
}

.px-292 {
  padding-left: 292px !important;
  padding-right: 292px !important;
}

.py-292 {
  padding-top: 292px !important;
  padding-bottom: 292px !important;
}

.p-292 {
  padding: 292px !important;
}

.m-292 {
  margin: 292px !important;
}

.w-292 {
  width: 292%!important;
}

.lb-rounded-293 {
  border-bottom-left-radius: 293px !important;
}

.minh-293 {
  min-height: 293px !important;
}

.rb-rounded-293 {
  border-bottom-right-radius: 293px !important;
}

.lt-rounded-293 {
  border-top-left-radius: 293px !important;
}

.rt-rounded-293 {
  border-top-right-radius: 293px !important;
}

.mt-293 {
  margin-top: 293px !important;
}

.mb-293 {
  margin-bottom: 293px !important;
}

.mr-293 {
  margin-right: 293px !important;
}

.ml-293 {
  margin-left: 293px !important;
}

.mx-293 {
  margin-left: 293px !important;
  margin-right: 293px !important;
}

.my-293 {
  margin-top: 293px !important;
  margin-bottom: 293px !important;
}

.pt-293 {
  padding-top: 293px !important;
}

.pb-293 {
  padding-bottom: 293px !important;
}

.pr-293 {
  padding-right: 293px !important;
}

.pl-293 {
  padding-left: 293px !important;
}

.px-293 {
  padding-left: 293px !important;
  padding-right: 293px !important;
}

.py-293 {
  padding-top: 293px !important;
  padding-bottom: 293px !important;
}

.p-293 {
  padding: 293px !important;
}

.m-293 {
  margin: 293px !important;
}

.w-293 {
  width: 293%!important;
}

.lb-rounded-294 {
  border-bottom-left-radius: 294px !important;
}

.minh-294 {
  min-height: 294px !important;
}

.rb-rounded-294 {
  border-bottom-right-radius: 294px !important;
}

.lt-rounded-294 {
  border-top-left-radius: 294px !important;
}

.rt-rounded-294 {
  border-top-right-radius: 294px !important;
}

.mt-294 {
  margin-top: 294px !important;
}

.mb-294 {
  margin-bottom: 294px !important;
}

.mr-294 {
  margin-right: 294px !important;
}

.ml-294 {
  margin-left: 294px !important;
}

.mx-294 {
  margin-left: 294px !important;
  margin-right: 294px !important;
}

.my-294 {
  margin-top: 294px !important;
  margin-bottom: 294px !important;
}

.pt-294 {
  padding-top: 294px !important;
}

.pb-294 {
  padding-bottom: 294px !important;
}

.pr-294 {
  padding-right: 294px !important;
}

.pl-294 {
  padding-left: 294px !important;
}

.px-294 {
  padding-left: 294px !important;
  padding-right: 294px !important;
}

.py-294 {
  padding-top: 294px !important;
  padding-bottom: 294px !important;
}

.p-294 {
  padding: 294px !important;
}

.m-294 {
  margin: 294px !important;
}

.w-294 {
  width: 294%!important;
}

.lb-rounded-295 {
  border-bottom-left-radius: 295px !important;
}

.minh-295 {
  min-height: 295px !important;
}

.rb-rounded-295 {
  border-bottom-right-radius: 295px !important;
}

.lt-rounded-295 {
  border-top-left-radius: 295px !important;
}

.rt-rounded-295 {
  border-top-right-radius: 295px !important;
}

.mt-295 {
  margin-top: 295px !important;
}

.mb-295 {
  margin-bottom: 295px !important;
}

.mr-295 {
  margin-right: 295px !important;
}

.ml-295 {
  margin-left: 295px !important;
}

.mx-295 {
  margin-left: 295px !important;
  margin-right: 295px !important;
}

.my-295 {
  margin-top: 295px !important;
  margin-bottom: 295px !important;
}

.pt-295 {
  padding-top: 295px !important;
}

.pb-295 {
  padding-bottom: 295px !important;
}

.pr-295 {
  padding-right: 295px !important;
}

.pl-295 {
  padding-left: 295px !important;
}

.px-295 {
  padding-left: 295px !important;
  padding-right: 295px !important;
}

.py-295 {
  padding-top: 295px !important;
  padding-bottom: 295px !important;
}

.p-295 {
  padding: 295px !important;
}

.m-295 {
  margin: 295px !important;
}

.w-295 {
  width: 295%!important;
}

.lb-rounded-296 {
  border-bottom-left-radius: 296px !important;
}

.minh-296 {
  min-height: 296px !important;
}

.rb-rounded-296 {
  border-bottom-right-radius: 296px !important;
}

.lt-rounded-296 {
  border-top-left-radius: 296px !important;
}

.rt-rounded-296 {
  border-top-right-radius: 296px !important;
}

.mt-296 {
  margin-top: 296px !important;
}

.mb-296 {
  margin-bottom: 296px !important;
}

.mr-296 {
  margin-right: 296px !important;
}

.ml-296 {
  margin-left: 296px !important;
}

.mx-296 {
  margin-left: 296px !important;
  margin-right: 296px !important;
}

.my-296 {
  margin-top: 296px !important;
  margin-bottom: 296px !important;
}

.pt-296 {
  padding-top: 296px !important;
}

.pb-296 {
  padding-bottom: 296px !important;
}

.pr-296 {
  padding-right: 296px !important;
}

.pl-296 {
  padding-left: 296px !important;
}

.px-296 {
  padding-left: 296px !important;
  padding-right: 296px !important;
}

.py-296 {
  padding-top: 296px !important;
  padding-bottom: 296px !important;
}

.p-296 {
  padding: 296px !important;
}

.m-296 {
  margin: 296px !important;
}

.w-296 {
  width: 296%!important;
}

.lb-rounded-297 {
  border-bottom-left-radius: 297px !important;
}

.minh-297 {
  min-height: 297px !important;
}

.rb-rounded-297 {
  border-bottom-right-radius: 297px !important;
}

.lt-rounded-297 {
  border-top-left-radius: 297px !important;
}

.rt-rounded-297 {
  border-top-right-radius: 297px !important;
}

.mt-297 {
  margin-top: 297px !important;
}

.mb-297 {
  margin-bottom: 297px !important;
}

.mr-297 {
  margin-right: 297px !important;
}

.ml-297 {
  margin-left: 297px !important;
}

.mx-297 {
  margin-left: 297px !important;
  margin-right: 297px !important;
}

.my-297 {
  margin-top: 297px !important;
  margin-bottom: 297px !important;
}

.pt-297 {
  padding-top: 297px !important;
}

.pb-297 {
  padding-bottom: 297px !important;
}

.pr-297 {
  padding-right: 297px !important;
}

.pl-297 {
  padding-left: 297px !important;
}

.px-297 {
  padding-left: 297px !important;
  padding-right: 297px !important;
}

.py-297 {
  padding-top: 297px !important;
  padding-bottom: 297px !important;
}

.p-297 {
  padding: 297px !important;
}

.m-297 {
  margin: 297px !important;
}

.w-297 {
  width: 297%!important;
}

.lb-rounded-298 {
  border-bottom-left-radius: 298px !important;
}

.minh-298 {
  min-height: 298px !important;
}

.rb-rounded-298 {
  border-bottom-right-radius: 298px !important;
}

.lt-rounded-298 {
  border-top-left-radius: 298px !important;
}

.rt-rounded-298 {
  border-top-right-radius: 298px !important;
}

.mt-298 {
  margin-top: 298px !important;
}

.mb-298 {
  margin-bottom: 298px !important;
}

.mr-298 {
  margin-right: 298px !important;
}

.ml-298 {
  margin-left: 298px !important;
}

.mx-298 {
  margin-left: 298px !important;
  margin-right: 298px !important;
}

.my-298 {
  margin-top: 298px !important;
  margin-bottom: 298px !important;
}

.pt-298 {
  padding-top: 298px !important;
}

.pb-298 {
  padding-bottom: 298px !important;
}

.pr-298 {
  padding-right: 298px !important;
}

.pl-298 {
  padding-left: 298px !important;
}

.px-298 {
  padding-left: 298px !important;
  padding-right: 298px !important;
}

.py-298 {
  padding-top: 298px !important;
  padding-bottom: 298px !important;
}

.p-298 {
  padding: 298px !important;
}

.m-298 {
  margin: 298px !important;
}

.w-298 {
  width: 298%!important;
}

.lb-rounded-299 {
  border-bottom-left-radius: 299px !important;
}

.minh-299 {
  min-height: 299px !important;
}

.rb-rounded-299 {
  border-bottom-right-radius: 299px !important;
}

.lt-rounded-299 {
  border-top-left-radius: 299px !important;
}

.rt-rounded-299 {
  border-top-right-radius: 299px !important;
}

.mt-299 {
  margin-top: 299px !important;
}

.mb-299 {
  margin-bottom: 299px !important;
}

.mr-299 {
  margin-right: 299px !important;
}

.ml-299 {
  margin-left: 299px !important;
}

.mx-299 {
  margin-left: 299px !important;
  margin-right: 299px !important;
}

.my-299 {
  margin-top: 299px !important;
  margin-bottom: 299px !important;
}

.pt-299 {
  padding-top: 299px !important;
}

.pb-299 {
  padding-bottom: 299px !important;
}

.pr-299 {
  padding-right: 299px !important;
}

.pl-299 {
  padding-left: 299px !important;
}

.px-299 {
  padding-left: 299px !important;
  padding-right: 299px !important;
}

.py-299 {
  padding-top: 299px !important;
  padding-bottom: 299px !important;
}

.p-299 {
  padding: 299px !important;
}

.m-299 {
  margin: 299px !important;
}

.w-299 {
  width: 299%!important;
}

.lb-rounded-300 {
  border-bottom-left-radius: 300px !important;
}

.minh-300 {
  min-height: 300px !important;
}

.rb-rounded-300 {
  border-bottom-right-radius: 300px !important;
}

.lt-rounded-300 {
  border-top-left-radius: 300px !important;
}

.rt-rounded-300 {
  border-top-right-radius: 300px !important;
}

.mt-300 {
  margin-top: 300px !important;
}

.mb-300 {
  margin-bottom: 300px !important;
}

.mr-300 {
  margin-right: 300px !important;
}

.ml-300 {
  margin-left: 300px !important;
}

.mx-300 {
  margin-left: 300px !important;
  margin-right: 300px !important;
}

.my-300 {
  margin-top: 300px !important;
  margin-bottom: 300px !important;
}

.pt-300 {
  padding-top: 300px !important;
}

.pb-300 {
  padding-bottom: 300px !important;
}

.pr-300 {
  padding-right: 300px !important;
}

.pl-300 {
  padding-left: 300px !important;
}

.px-300 {
  padding-left: 300px !important;
  padding-right: 300px !important;
}

.py-300 {
  padding-top: 300px !important;
  padding-bottom: 300px !important;
}

.p-300 {
  padding: 300px !important;
}

.m-300 {
  margin: 300px !important;
}

.w-300 {
  width: 300%!important;
}

.column-box {
  box-shadow: 0 20px 40px 10px rgba(0, 0, 0, 0.1);
  padding: 25px;
  background: white;
  align-items: center;
}

.border-line {
  height: 1px;
  border: 2px solid #67beae;
  border-top: 1px solid #EBEBEB;
  border-top-color: #ebebeb;
  border-top-width: 1px;
  display: block;
  position: relative;
  top: 1px;
  width: 100%;
}

#wrap-right .border-line, #customers-area .border-line {
  width: 6rem !important;
}
#wrap-right.box, #customers-area.box {
  padding: 5px !important;
}
#wrap-right .wpb_animate_when_almost_visible, #customers-area .wpb_animate_when_almost_visible {
  display: none;
}

.border-line-white {
  height: 1px;
  border: 2px solid #EBEBEB;
  border-top: 1px solid #EBEBEB;
  border-top-color: #ebebeb;
  border-top-width: 1px;
  display: block;
  position: relative;
  top: 1px;
  width: 100%;
}

.case-thumbnail {
  -moz-box-shadow: #ccc 0px 0px 15px;
  -webkit-box-shadow: #ccc 0px 0px 15px;
  box-shadow: #ccc 0px 0px 15px;
  width: 200px;
  height: 200px;
  background: white;
}

.border-line-inverse {
  height: 1px;
  border: 2px solid white;
  border-top: 1px solid white;
  border-top-color: #ebebeb;
  border-top-width: 1px;
  display: block;
  position: relative;
  top: 1px;
  width: 100%;
}

.background-fixed-effect {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
}

#contato-footer {
  background: #003e81;
}
#contato-footer h1 {
  color: white;
  font-weight: 700;
}

#body-nav-flag {
  padding: 10px;
  background-color: rgba(0, 0, 0, 0.4);
  opacity: 0;
  z-index: 0;
  position: fixed;
  bottom: 10px;
  right: 10px;
  z-index: 9999999;
  transition: all 0.3s;
}
#body-nav-flag i {
  color: #f1f1f1;
}
#body-nav-flag.show {
  opacity: 1;
}
#body-nav-flag:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

.btn-primary-dark {
  color: #fff !important;
  background-color: #003e81 !important;
  opacity: 1;
  transition: 0.3s all;
}
.btn-primary-dark:hover {
  opacity: 0.9;
}

.main-footer {
  background: #000;
  color: #fff;
  padding: 16px;
}
.main-footer p {
  font-size: 0.7rem;
  margin: 0 !important;
}

@media screen and (max-width: 320px) {
  #contato-footer .title-h1 {
    font-size: 30px;
  }
}



@font-face {
    font-family: 'Kaushan Script';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/kaushanscript/v16/vm8vdRfvXFLG3OLnsO15WYS5DG74wNI.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  /* latin */
@font-face {
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/montserrat/v26/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw5aXo.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
  
  /* latin */
  @font-face {
    font-family: 'Source Sans Pro';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/sourcesanspro/v22/6xK3dSBYKcSV-LCoeQqfX1RYOo3qOK7l.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
a, p, b, small, body, label, input, textarea {
  font-family: 'Source Sans Pro';
  color: #5f727f;
}

h1, h2, h3, h4, h5, h6 {
  font-family: 'Montserrat';
}

h1.primary {
  color: #3c3950;
}

.primary-lighten {
  color: #003e81;
}

.form-control {
  border-radius: 0px !important;
}

h2.secondary {
  color: #3c3950;
}

.title-h1 {
  font-size: 36px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.100em;
}
@media (max-width: 500px) {
  .title-h1 {
    font-size: 32px;
  }
}

.title-h4 {
  font-size: 24px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.100em;
}

.title-h3 {
  font-size: 28px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.100em;
}

.title-h5 {
  font-size: 19px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.100em;
}

.title-h6 {
  font-size: 16px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: .05em;
  letter-spacing: 0.100em;
}

.text-center {
  text-align: center;
}

#top-background {
  z-index: 9999;
  background: white;
}
#top-background.fixed {
  position: fixed;
  width: 100%;
  -moz-box-shadow: #ccc 2px 2px 5px;
  -webkit-box-shadow: #ccc 2px 2px 5px;
  box-shadow: #ccc 2px 2px 5px;
}
#top-background.fixed #mainNav .img-logo {
  width: 90px;
}

@media (max-width: 768px) {
  .menu-menu-principal-container ul li {
    width: 100%;
    padding: 5px !important;
    text-align: center;
  }
  .menu-menu-principal-container ul li:active {
    background-color: #f1f1f1;
  }
  .menu-menu-principal-container ul li a {
    width: 100%;
  }
}
#mainNav {
  position: relative;
  top: 0px;
  width: 100%;
  z-index: 9999;
  z-index: 999999999;
  height: auto;
  display: flex;
  background: #fff;
}
#mainNav .navbar-nav li {
  margin-right: 25px;
}
#mainNav .navbar-nav li a {
  transition: all 0.3s;
  color: #818181;
  font-family: 'Montserrat' !important;
  font-size: 14px;
}
#mainNav .navbar-nav li a:hover {
  color: #3c3950;
  text-decoration: none;
}

.img-logo {
  width: 140px;
}

#navbar {
  justify-content: flex-end;
}

.carousel-caption {
  position: absolute;
  bottom: 12% !important;
  height: 270px;
  left: 10% !important;
  width: auto;
  text-align: left !important;
}
@media (max-width: 768px) {
  .carousel-caption {
    top: 20%;
  }
}
@media (max-width: 500px) {
  .carousel-caption {
    top: 30%;
  }
}
.carousel-caption .logo-text-style {
  font-weight: normal;
  font-family: 'ScriptEspecial', cursive;
  font-size: 6em;
  color: #67beae;
  text-shadow: #333 0px 0px 3px;
}
@media (max-width: 1200px) {
  .carousel-caption .logo-text-style {
    font-size: 3.1em;
  }
}
@media (max-width: 768px) {
  .carousel-caption .logo-text-style {
    font-size: 2.1em;
  }
}
.carousel-caption p {
  color: white;
  font-weight: 500;
  font-family: 'Montserrat';
  font-size: 6em;
}
@media (max-width: 1200px) {
  .carousel-caption p {
    font-size: 3.1em;
  }
}
@media (max-width: 768px) {
  .carousel-caption p {
    font-size: 1.2em;
  }
}

.carousel-item-container {
  display: block;
  background-attachment: scroll;
  background-position-x: center;
  background-position-y: center;
  max-height: 100%;
  color: #fff;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  perspective: 1000px;
}
@media (max-width: 768px) {
  .carousel-item-container {
    height: 250px;
    background-position: center center;
    background-size: auto 100%;
    background-color: transparent;
  }
}
@media (max-width: 500px) {
  .carousel-item-container {
    height: 250px;
    background-position: center center;
    background-size: cover;
    background-color: transparent;
  }
}
@media (max-width: 320px) {
  .carousel-item-container {
    height: 180px;
    background-position: center center;
    background-size: cover;
    background-color: transparent;
  }
}

#slider {
  position: relative;
  background: transparent;
}
@media screen and (max-width: 768px) {
  #slider .carousel-control {
    display: none;
  }
}

@media (max-width: 992px) {
  #sessao-chamada-1 {
    padding: 0px !important;
  }
}

#apras-coluna-esquerda {
  flex: 1 0 100%;
  max-height: 320px;
  padding: 1px !important;
}
@media (min-width: 1200px) {
  #apras-coluna-esquerda {
    flex: 1 0 52%;
    max-width: 52%;
  }
}
#apras-coluna-esquerda .title-h3 {
  color: #003e81;
}
#apras-coluna-esquerda .column-box {
  padding-top: 60px !important;
  padding-bottom: 90px !important;
  padding-left: 9px !important;
  padding-right: 9px !important;
}
#apras-coluna-esquerda .column-box p {
  font-size: 19px;
}
@media (max-width: 768px) {
  #apras-coluna-esquerda {
    padding: 0px !important;
    margin-bottom: 10px;
    margin-top: 0px;
  }
}

#apras-coluna-direita {
  padding: 3px !important;
  flex: 1 0 100%;
}
#apras-coluna-direita p {
  font-size: 17px;
}
@media (min-width: 1200px) {
  #apras-coluna-direita {
    flex: 1 0 48%;
    max-width: 48%;
  }
}
#apras-coluna-direita .column-box {
  padding-left: 40px !important;
  padding-right: 40px !important;
  padding-top: 60px !important;
}
#apras-coluna-direita .column-box p {
  text-align: justify;
}
@media (max-width: 992px) {
  #apras-coluna-direita {
    margin-top: 0px !important;
  }
}
@media (max-width: 768px) {
  #apras-coluna-direita {
    padding: 0px !important;
  }
}

#a-empresa .title-h3 {
  color: #3c3950;
}
@media (max-width: 768px) {
  #a-empresa {
    margin-top: 10px;
    padding: 10px !important;
  }
}

#destaques-area {
  z-index: 1;
}
@media (max-width: 768px) {
  #destaques-area {
    margin-top: 5px;
    padding-left: 20px !important;
    padding-right: 20px !important;
  }
}

.destaques-content-box {
  margin-bottom: 30px;
}
.destaques-content-box h2 {
  text-transform: uppercase;
  color: #3c3950;
  font-weight: 700;
  font-size: 24px;
  margin-bottom: 16px;
  margin-top: 8px;
}
@media (max-width: 768px) {
  .destaques-content-box h2 {
    font-size: 18px;
  }
}
.destaques-content-box:hover .icon-area i {
  background: #3c3950;
  color: white;
}
.destaques-content-box .icon-area i {
  cursor: pointer;
  transition: all 0.3s;
  border-radius: 50%;
  width: 30px;
  height: 30px;
  display: flex;
  font-size: 1.4em;
  flex-direction: column;
  align-items: center;
  align-content: center;
  justify-content: center;
  background: #f1f1f1;
  padding: 25px;
  border: 2px solid #3c3950;
  color: #3c3950;
}

#banner-alunos {
  height: 400px;
}
@media (max-width: 320px) {
  #banner-alunos {
    max-height: 200px;
  }
}
@media (max-width: 768px) {
  #banner-alunos {
    max-height: 250px;
  }
}

#logo-alunos {
  z-index: 0;
}
#logo-alunos #banner-alunos {
  z-index: 0;
  margin-top: -100px;
}
@media (max-width: 1200px) {
  #logo-alunos #banner-alunos {
    margin-top: 10px;
  }
}

#banner-algodao {
  width: 100%;
  margin-top: -110px;
  z-index: 0;
  height: 500px;
  display: flex;
  justify-content: flex-end;
}
@media (max-width: 768px) {
  #banner-algodao {
    margin-top: -30px;
    padding: 20px !important;
  }
  #banner-algodao p {
    font-size: 18px !important;
  }
}
@media (max-width: 320px) {
  #banner-algodao {
    margin-top: -10px;
    padding: 20px !important;
  }
  #banner-algodao p {
    font-size: 18px !important;
  }
}
#banner-algodao .btn-confira {
  font-weight: bold;
  border-radius: 43px;
  border-width: 2px;
  border-color: #ffffff;
  border-style: solid;
  color: #ffffff;
  text-transform: uppercase;
  padding: 15px 30px;
  cursor: pointer;
  display: inline-block;
  font-size: 20px;
  transition: 0.3s all;
  cursor: pointer;
}
#banner-algodao .btn-confira:hover {
  background-color: white;
  color: #67beae;
  text-decoration: none;
}
#banner-algodao .text-box {
  text-align: right;
}
#banner-algodao .text-box .text-box-inner {
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
#banner-algodao .text-box .text-box-inner h1 {
  font-weight: 700;
  color: white;
  font-size: 36px;
}
#banner-algodao .text-box .text-box-inner p {
  font-size: 23px;
  font-weight: 500;
  color: white;
}
#banner-algodao .text-box .text-box-inner h2 {
  color: #67beae;
}
#banner-algodao .text-box .text-box-inner h1, #banner-algodao .text-box .text-box-inner h3 {
  text-transform: uppercase;
  font-weight: 700;
}

#contato-left-block h1, #contato-left-block h2, #contato-left-block h3, #contato-left-block h4, #contato-left-block h5, #contato-left-block h6, #contato-left-block p, #contato-left-block b, #contato-left-block small, #contato-left-block label, #contato-left-block i {
  color: #f1f1f1 !important;
}

@media (min-width: 1200px) {
  .container-apras {
    max-width: 1150px !important;
  }
}
.container-apras {
  width: 100% !important;
  margin-right: auto;
  margin-left: auto;
}

body {
  color: #666;
}

.bg-transparent {
  background-color: transparent;
}

.bg-darkness {
  background: #000;
}

#navbarSupportedContent {
  flex-grow: 0 !important;
}

.gray-bg-box {
  background: #f1f1f1;
}

.pad-container {
  padding: 70px;
}
@media (max-width: 768px) {
  .pad-container {
    padding: 30px;
  }
}

.center {
  text-align: center;
}

.business-container * .material-icons {
  font-size: 1.6em;
  vertical-align: middle;
}

.box {
  padding: 30px;
  margin: 10px;
}
@media (max-width: 768px) {
  .box {
    padding: 0px;
    margin: 0px;
    margin-bottom: 30px;
  }
}

.top-box {
  padding: 50px;
  background: rgba(0, 0, 0, 0.6);
  border-radius: 50px 10px 30px;
  transition: background 0.5s;
}
.top-box p, .top-box h3, .top-box a {
  text-shadow: #000 0px 0px 10px;
}

.top-box:hover {
  background: rgba(0, 0, 0, 0.8);
}

.top-box-container {
  margin-top: 50px;
}

.carousel-control-prev, .carousel-control-next {
  font-size: 4.5em;
}


.container-fluid {
  max-width: 1920px;
  padding: 0px;
}

/*!
 * Bootstrap v4.4.1 (https://getbootstrap.com/)
 * Copyright 2011-2019 The Bootstrap Authors
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
:root {
  --blue: #007bff;
  --indigo: #6610f2;
  --purple: #6f42c1;
  --pink: #e83e8c;
  --red: #dc3545;
  --orange: #fd7e14;
  --yellow: #ffc107;
  --green: #28a745;
  --teal: #20c997;
  --cyan: #17a2b8;
  --white: #fff;
  --gray: #6c757d;
  --gray-dark: #343a40;
  --primary: #007bff;
  --secondary: #6c757d;
  --success: #28a745;
  --info: #17a2b8;
  --warning: #ffc107;
  --danger: #dc3545;
  --light: #f8f9fa;
  --dark: #343a40;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block;
}

body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color: #fff;
}

[tabindex="-1"]:focus:not(:focus-visible) {
  outline: 0 !important;
}

hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible;
}

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  -webkit-text-decoration: underline dotted;
  text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0;
  -webkit-text-decoration-skip-ink: none;
  text-decoration-skip-ink: none;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 700;
}

dd {
  margin-bottom: .5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

b,
strong {
  font-weight: bolder;
}

small {
  font-size: 80%;
}

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -.25em;
}

sup {
  top: -.5em;
}

a {
  color: #007bff;
  text-decoration: none;
  background-color: transparent;
}

a:hover {
  color: #0056b3;
  text-decoration: underline;
}

a:not([href]) {
  color: inherit;
  text-decoration: none;
}

a:not([href]):hover {
  color: inherit;
  text-decoration: none;
}

pre,
code,
kbd,
samp {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  font-size: 1em;
}

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
}

figure {
  margin: 0 0 1rem;
}

img {
  vertical-align: middle;
  border-style: none;
}

svg {
  overflow: hidden;
  vertical-align: middle;
}

table {
  border-collapse: collapse;
}

caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #6c757d;
  text-align: left;
  caption-side: bottom;
}

th {
  text-align: inherit;
}

label {
  display: inline-block;
  margin-bottom: 0.5rem;
}

button {
  border-radius: 0;
}

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
input {
  overflow: visible;
}

button,
select {
  text-transform: none;
}

select {
  word-wrap: normal;
}

button,
[type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
}

button:not(:disabled),
[type="button"]:not(:disabled),
[type="reset"]:not(:disabled),
[type="submit"]:not(:disabled) {
  cursor: pointer;
}

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

input[type="radio"],
input[type="checkbox"] {
  box-sizing: border-box;
  padding: 0;
}

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
  -webkit-appearance: listbox;
}

textarea {
  overflow: auto;
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal;
}

progress {
  vertical-align: baseline;
}

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none;
}

[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

summary {
  display: list-item;
  cursor: pointer;
}

template {
  display: none;
}

[hidden] {
  display: none !important;
}

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 0.5rem;
  font-weight: 500;
  line-height: 1.2;
}

h1, .h1 {
  font-size: 2.5rem;
}

h2, .h2 {
  font-size: 2rem;
}

h3, .h3 {
  font-size: 1.75rem;
}

h4, .h4 {
  font-size: 1.5rem;
}

h5, .h5 {
  font-size: 1.25rem;
}

h6, .h6 {
  font-size: 1rem;
}

.lead {
  font-size: 1.25rem;
  font-weight: 300;
}

.display-1 {
  font-size: 6rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-2 {
  font-size: 5.5rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-3 {
  font-size: 4.5rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-4 {
  font-size: 3.5rem;
  font-weight: 300;
  line-height: 1.2;
}

hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}

small,
.small {
  font-size: 80%;
  font-weight: 400;
}

mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3;
}

.list-unstyled {
  padding-left: 0;
  list-style: none;
}

.list-inline {
  padding-left: 0;
  list-style: none;
}

.list-inline-item {
  display: inline-block;
}

.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}

.initialism {
  font-size: 90%;
  text-transform: uppercase;
}

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem;
}

.blockquote-footer {
  display: block;
  font-size: 80%;
  color: #6c757d;
}

.blockquote-footer::before {
  content: "\2014\00A0";
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.img-thumbnail {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto;
}

.figure {
  display: inline-block;
}

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}

.figure-caption {
  font-size: 90%;
  color: #6c757d;
}

code {
  font-size: 87.5%;
  color: #e83e8c;
  word-wrap: break-word;
}

a > code {
  color: inherit;
}

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 87.5%;
  color: #fff;
  background-color: #212529;
  border-radius: 0.2rem;
}

kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: 700;
}

pre {
  display: block;
  font-size: 87.5%;
  color: #212529;
}

pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}

.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}

@media (min-width: 992px) {
  .container {
    max-width: 960px;
  }
}

@media (min-width: 1200px) {
  .container {
    max-width: 1140px;
  }
}

.container-fluid, .container-sm, .container-md, .container-lg, .container-xl {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container, .container-sm {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .container, .container-sm, .container-md {
    max-width: 720px;
  }
}

@media (min-width: 992px) {
  .container, .container-sm, .container-md, .container-lg {
    max-width: 960px;
  }
}

@media (min-width: 1200px) {
  .container, .container-sm, .container-md, .container-lg, .container-xl {
    max-width: 1140px;
  }
}

.row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}

.no-gutters {
  margin-right: 0;
  margin-left: 0;
}

.no-gutters > .col,
.no-gutters > [class*="col-"] {
  padding-right: 0;
  padding-left: 0;
}

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
}

.col {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -ms-flex-positive: 1;
  flex-grow: 1;
  max-width: 100%;
}

.row-cols-1 > * {
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%;
}

.row-cols-2 > * {
  -ms-flex: 0 0 50%;
  flex: 0 0 50%;
  max-width: 50%;
}

.row-cols-3 > * {
  -ms-flex: 0 0 33.333333%;
  flex: 0 0 33.333333%;
  max-width: 33.333333%;
}

.row-cols-4 > * {
  -ms-flex: 0 0 25%;
  flex: 0 0 25%;
  max-width: 25%;
}

.row-cols-5 > * {
  -ms-flex: 0 0 20%;
  flex: 0 0 20%;
  max-width: 20%;
}

.row-cols-6 > * {
  -ms-flex: 0 0 16.666667%;
  flex: 0 0 16.666667%;
  max-width: 16.666667%;
}

.col-auto {
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto;
  max-width: 100%;
}

.col-1 {
  -ms-flex: 0 0 8.333333%;
  flex: 0 0 8.333333%;
  max-width: 8.333333%;
}

.col-2 {
  -ms-flex: 0 0 16.666667%;
  flex: 0 0 16.666667%;
  max-width: 16.666667%;
}

.col-3 {
  -ms-flex: 0 0 25%;
  flex: 0 0 25%;
  max-width: 25%;
}

.col-4 {
  -ms-flex: 0 0 33.333333%;
  flex: 0 0 33.333333%;
  max-width: 33.333333%;
}

.col-5 {
  -ms-flex: 0 0 41.666667%;
  flex: 0 0 41.666667%;
  max-width: 41.666667%;
}

.col-6 {
  -ms-flex: 0 0 50%;
  flex: 0 0 50%;
  max-width: 50%;
}

.col-7 {
  -ms-flex: 0 0 58.333333%;
  flex: 0 0 58.333333%;
  max-width: 58.333333%;
}

.col-8 {
  -ms-flex: 0 0 66.666667%;
  flex: 0 0 66.666667%;
  max-width: 66.666667%;
}

.col-9 {
  -ms-flex: 0 0 75%;
  flex: 0 0 75%;
  max-width: 75%;
}

.col-10 {
  -ms-flex: 0 0 83.333333%;
  flex: 0 0 83.333333%;
  max-width: 83.333333%;
}

.col-11 {
  -ms-flex: 0 0 91.666667%;
  flex: 0 0 91.666667%;
  max-width: 91.666667%;
}

.col-12 {
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%;
}

.order-first {
  -ms-flex-order: -1;
  order: -1;
}

.order-last {
  -ms-flex-order: 13;
  order: 13;
}

.order-0 {
  -ms-flex-order: 0;
  order: 0;
}

.order-1 {
  -ms-flex-order: 1;
  order: 1;
}

.order-2 {
  -ms-flex-order: 2;
  order: 2;
}

.order-3 {
  -ms-flex-order: 3;
  order: 3;
}

.order-4 {
  -ms-flex-order: 4;
  order: 4;
}

.order-5 {
  -ms-flex-order: 5;
  order: 5;
}

.order-6 {
  -ms-flex-order: 6;
  order: 6;
}

.order-7 {
  -ms-flex-order: 7;
  order: 7;
}

.order-8 {
  -ms-flex-order: 8;
  order: 8;
}

.order-9 {
  -ms-flex-order: 9;
  order: 9;
}

.order-10 {
  -ms-flex-order: 10;
  order: 10;
}

.order-11 {
  -ms-flex-order: 11;
  order: 11;
}

.order-12 {
  -ms-flex-order: 12;
  order: 12;
}

.offset-1 {
  margin-left: 8.333333%;
}

.offset-2 {
  margin-left: 16.666667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.333333%;
}

.offset-5 {
  margin-left: 41.666667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.333333%;
}

.offset-8 {
  margin-left: 66.666667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.333333%;
}

.offset-11 {
  margin-left: 91.666667%;
}

@media (min-width: 576px) {
  .col-sm {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .row-cols-sm-1 > * {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .row-cols-sm-2 > * {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .row-cols-sm-3 > * {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .row-cols-sm-4 > * {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .row-cols-sm-5 > * {
    -ms-flex: 0 0 20%;
    flex: 0 0 20%;
    max-width: 20%;
  }
  .row-cols-sm-6 > * {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-sm-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-sm-1 {
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-sm-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-sm-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-sm-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-sm-5 {
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-sm-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-sm-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-sm-8 {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-sm-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-sm-10 {
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-sm-11 {
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-sm-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-sm-first {
    -ms-flex-order: -1;
    order: -1;
  }
  .order-sm-last {
    -ms-flex-order: 13;
    order: 13;
  }
  .order-sm-0 {
    -ms-flex-order: 0;
    order: 0;
  }
  .order-sm-1 {
    -ms-flex-order: 1;
    order: 1;
  }
  .order-sm-2 {
    -ms-flex-order: 2;
    order: 2;
  }
  .order-sm-3 {
    -ms-flex-order: 3;
    order: 3;
  }
  .order-sm-4 {
    -ms-flex-order: 4;
    order: 4;
  }
  .order-sm-5 {
    -ms-flex-order: 5;
    order: 5;
  }
  .order-sm-6 {
    -ms-flex-order: 6;
    order: 6;
  }
  .order-sm-7 {
    -ms-flex-order: 7;
    order: 7;
  }
  .order-sm-8 {
    -ms-flex-order: 8;
    order: 8;
  }
  .order-sm-9 {
    -ms-flex-order: 9;
    order: 9;
  }
  .order-sm-10 {
    -ms-flex-order: 10;
    order: 10;
  }
  .order-sm-11 {
    -ms-flex-order: 11;
    order: 11;
  }
  .order-sm-12 {
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.333333%;
  }
  .offset-sm-2 {
    margin-left: 16.666667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.333333%;
  }
  .offset-sm-5 {
    margin-left: 41.666667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.333333%;
  }
  .offset-sm-8 {
    margin-left: 66.666667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.333333%;
  }
  .offset-sm-11 {
    margin-left: 91.666667%;
  }
}

@media (min-width: 768px) {
  .col-md {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .row-cols-md-1 > * {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .row-cols-md-2 > * {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .row-cols-md-3 > * {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .row-cols-md-4 > * {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .row-cols-md-5 > * {
    -ms-flex: 0 0 20%;
    flex: 0 0 20%;
    max-width: 20%;
  }
  .row-cols-md-6 > * {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-md-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-md-1 {
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-md-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-md-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-md-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-md-5 {
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-md-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-md-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-md-8 {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-md-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-md-10 {
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-md-11 {
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-md-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-md-first {
    -ms-flex-order: -1;
    order: -1;
  }
  .order-md-last {
    -ms-flex-order: 13;
    order: 13;
  }
  .order-md-0 {
    -ms-flex-order: 0;
    order: 0;
  }
  .order-md-1 {
    -ms-flex-order: 1;
    order: 1;
  }
  .order-md-2 {
    -ms-flex-order: 2;
    order: 2;
  }
  .order-md-3 {
    -ms-flex-order: 3;
    order: 3;
  }
  .order-md-4 {
    -ms-flex-order: 4;
    order: 4;
  }
  .order-md-5 {
    -ms-flex-order: 5;
    order: 5;
  }
  .order-md-6 {
    -ms-flex-order: 6;
    order: 6;
  }
  .order-md-7 {
    -ms-flex-order: 7;
    order: 7;
  }
  .order-md-8 {
    -ms-flex-order: 8;
    order: 8;
  }
  .order-md-9 {
    -ms-flex-order: 9;
    order: 9;
  }
  .order-md-10 {
    -ms-flex-order: 10;
    order: 10;
  }
  .order-md-11 {
    -ms-flex-order: 11;
    order: 11;
  }
  .order-md-12 {
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.333333%;
  }
  .offset-md-2 {
    margin-left: 16.666667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.333333%;
  }
  .offset-md-5 {
    margin-left: 41.666667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.333333%;
  }
  .offset-md-8 {
    margin-left: 66.666667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.333333%;
  }
  .offset-md-11 {
    margin-left: 91.666667%;
  }
}

@media (min-width: 992px) {
  .col-lg {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .row-cols-lg-1 > * {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .row-cols-lg-2 > * {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .row-cols-lg-3 > * {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .row-cols-lg-4 > * {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .row-cols-lg-5 > * {
    -ms-flex: 0 0 20%;
    flex: 0 0 20%;
    max-width: 20%;
  }
  .row-cols-lg-6 > * {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-lg-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-lg-1 {
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-lg-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-lg-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-lg-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-lg-5 {
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-lg-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-lg-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-lg-8 {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-lg-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-lg-10 {
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-lg-11 {
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-lg-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-lg-first {
    -ms-flex-order: -1;
    order: -1;
  }
  .order-lg-last {
    -ms-flex-order: 13;
    order: 13;
  }
  .order-lg-0 {
    -ms-flex-order: 0;
    order: 0;
  }
  .order-lg-1 {
    -ms-flex-order: 1;
    order: 1;
  }
  .order-lg-2 {
    -ms-flex-order: 2;
    order: 2;
  }
  .order-lg-3 {
    -ms-flex-order: 3;
    order: 3;
  }
  .order-lg-4 {
    -ms-flex-order: 4;
    order: 4;
  }
  .order-lg-5 {
    -ms-flex-order: 5;
    order: 5;
  }
  .order-lg-6 {
    -ms-flex-order: 6;
    order: 6;
  }
  .order-lg-7 {
    -ms-flex-order: 7;
    order: 7;
  }
  .order-lg-8 {
    -ms-flex-order: 8;
    order: 8;
  }
  .order-lg-9 {
    -ms-flex-order: 9;
    order: 9;
  }
  .order-lg-10 {
    -ms-flex-order: 10;
    order: 10;
  }
  .order-lg-11 {
    -ms-flex-order: 11;
    order: 11;
  }
  .order-lg-12 {
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.333333%;
  }
  .offset-lg-2 {
    margin-left: 16.666667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.333333%;
  }
  .offset-lg-5 {
    margin-left: 41.666667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.333333%;
  }
  .offset-lg-8 {
    margin-left: 66.666667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.333333%;
  }
  .offset-lg-11 {
    margin-left: 91.666667%;
  }
}

@media (min-width: 1200px) {
  .col-xl {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .row-cols-xl-1 > * {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .row-cols-xl-2 > * {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .row-cols-xl-3 > * {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .row-cols-xl-4 > * {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .row-cols-xl-5 > * {
    -ms-flex: 0 0 20%;
    flex: 0 0 20%;
    max-width: 20%;
  }
  .row-cols-xl-6 > * {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-xl-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-xl-1 {
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-xl-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-xl-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-xl-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-xl-5 {
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-xl-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-xl-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-xl-8 {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-xl-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-xl-10 {
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-xl-11 {
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-xl-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-xl-first {
    -ms-flex-order: -1;
    order: -1;
  }
  .order-xl-last {
    -ms-flex-order: 13;
    order: 13;
  }
  .order-xl-0 {
    -ms-flex-order: 0;
    order: 0;
  }
  .order-xl-1 {
    -ms-flex-order: 1;
    order: 1;
  }
  .order-xl-2 {
    -ms-flex-order: 2;
    order: 2;
  }
  .order-xl-3 {
    -ms-flex-order: 3;
    order: 3;
  }
  .order-xl-4 {
    -ms-flex-order: 4;
    order: 4;
  }
  .order-xl-5 {
    -ms-flex-order: 5;
    order: 5;
  }
  .order-xl-6 {
    -ms-flex-order: 6;
    order: 6;
  }
  .order-xl-7 {
    -ms-flex-order: 7;
    order: 7;
  }
  .order-xl-8 {
    -ms-flex-order: 8;
    order: 8;
  }
  .order-xl-9 {
    -ms-flex-order: 9;
    order: 9;
  }
  .order-xl-10 {
    -ms-flex-order: 10;
    order: 10;
  }
  .order-xl-11 {
    -ms-flex-order: 11;
    order: 11;
  }
  .order-xl-12 {
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.333333%;
  }
  .offset-xl-2 {
    margin-left: 16.666667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.333333%;
  }
  .offset-xl-5 {
    margin-left: 41.666667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.333333%;
  }
  .offset-xl-8 {
    margin-left: 66.666667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.333333%;
  }
  .offset-xl-11 {
    margin-left: 91.666667%;
  }
}

.table {
  width: 100%;
  margin-bottom: 1rem;
  color: #212529;
}

.table th,
.table td {
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}

.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
}

.table tbody + tbody {
  border-top: 2px solid #dee2e6;
}

.table-sm th,
.table-sm td {
  padding: 0.3rem;
}

.table-bordered {
  border: 1px solid #dee2e6;
}

.table-bordered th,
.table-bordered td {
  border: 1px solid #dee2e6;
}

.table-bordered thead th,
.table-bordered thead td {
  border-bottom-width: 2px;
}

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
  border: 0;
}

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.05);
}

.table-hover tbody tr:hover {
  color: #212529;
  background-color: rgba(0, 0, 0, 0.075);
}

.table-primary,
.table-primary > th,
.table-primary > td {
  background-color: #b8daff;
}

.table-primary th,
.table-primary td,
.table-primary thead th,
.table-primary tbody + tbody {
  border-color: #7abaff;
}

.table-hover .table-primary:hover {
  background-color: #9fcdff;
}

.table-hover .table-primary:hover > td,
.table-hover .table-primary:hover > th {
  background-color: #9fcdff;
}

.table-secondary,
.table-secondary > th,
.table-secondary > td {
  background-color: #d6d8db;
}

.table-secondary th,
.table-secondary td,
.table-secondary thead th,
.table-secondary tbody + tbody {
  border-color: #b3b7bb;
}

.table-hover .table-secondary:hover {
  background-color: #c8cbcf;
}

.table-hover .table-secondary:hover > td,
.table-hover .table-secondary:hover > th {
  background-color: #c8cbcf;
}

.table-success,
.table-success > th,
.table-success > td {
  background-color: #c3e6cb;
}

.table-success th,
.table-success td,
.table-success thead th,
.table-success tbody + tbody {
  border-color: #8fd19e;
}

.table-hover .table-success:hover {
  background-color: #b1dfbb;
}

.table-hover .table-success:hover > td,
.table-hover .table-success:hover > th {
  background-color: #b1dfbb;
}

.table-info,
.table-info > th,
.table-info > td {
  background-color: #bee5eb;
}

.table-info th,
.table-info td,
.table-info thead th,
.table-info tbody + tbody {
  border-color: #86cfda;
}

.table-hover .table-info:hover {
  background-color: #abdde5;
}

.table-hover .table-info:hover > td,
.table-hover .table-info:hover > th {
  background-color: #abdde5;
}

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #ffeeba;
}

.table-warning th,
.table-warning td,
.table-warning thead th,
.table-warning tbody + tbody {
  border-color: #ffdf7e;
}

.table-hover .table-warning:hover {
  background-color: #ffe8a1;
}

.table-hover .table-warning:hover > td,
.table-hover .table-warning:hover > th {
  background-color: #ffe8a1;
}

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #f5c6cb;
}

.table-danger th,
.table-danger td,
.table-danger thead th,
.table-danger tbody + tbody {
  border-color: #ed969e;
}

.table-hover .table-danger:hover {
  background-color: #f1b0b7;
}

.table-hover .table-danger:hover > td,
.table-hover .table-danger:hover > th {
  background-color: #f1b0b7;
}

.table-light,
.table-light > th,
.table-light > td {
  background-color: #fdfdfe;
}

.table-light th,
.table-light td,
.table-light thead th,
.table-light tbody + tbody {
  border-color: #fbfcfc;
}

.table-hover .table-light:hover {
  background-color: #ececf6;
}

.table-hover .table-light:hover > td,
.table-hover .table-light:hover > th {
  background-color: #ececf6;
}

.table-dark,
.table-dark > th,
.table-dark > td {
  background-color: #c6c8ca;
}

.table-dark th,
.table-dark td,
.table-dark thead th,
.table-dark tbody + tbody {
  border-color: #95999c;
}

.table-hover .table-dark:hover {
  background-color: #b9bbbe;
}

.table-hover .table-dark:hover > td,
.table-hover .table-dark:hover > th {
  background-color: #b9bbbe;
}

.table-active,
.table-active > th,
.table-active > td {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover > td,
.table-hover .table-active:hover > th {
  background-color: rgba(0, 0, 0, 0.075);
}

.table .thead-dark th {
  color: #fff;
  background-color: #343a40;
  border-color: #454d55;
}

.table .thead-light th {
  color: #495057;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.table-dark {
  color: #fff;
  background-color: #343a40;
}

.table-dark th,
.table-dark td,
.table-dark thead th {
  border-color: #454d55;
}

.table-dark.table-bordered {
  border: 0;
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(255, 255, 255, 0.05);
}

.table-dark.table-hover tbody tr:hover {
  color: #fff;
  background-color: rgba(255, 255, 255, 0.075);
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-sm > .table-bordered {
    border: 0;
  }
}

@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-md > .table-bordered {
    border: 0;
  }
}

@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-lg > .table-bordered {
    border: 0;
  }
}

@media (max-width: 1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-xl > .table-bordered {
    border: 0;
  }
}

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

.table-responsive > .table-bordered {
  border: 0;
}

.form-control {
  display: block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .form-control {
    transition: none;
  }
}

.form-control::-ms-expand {
  background-color: transparent;
  border: 0;
}

.form-control:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #495057;
}

.form-control:focus {
  color: #495057;
  background-color: #fff;
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.form-control::-webkit-input-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control::-moz-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control:-ms-input-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control::-ms-input-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control::placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control:disabled, .form-control[readonly] {
  background-color: #e9ecef;
  opacity: 1;
}

select.form-control:focus::-ms-value {
  color: #495057;
  background-color: #fff;
}

.form-control-file,
.form-control-range {
  display: block;
  width: 100%;
}

.col-form-label {
  padding-top: calc(0.375rem + 1px);
  padding-bottom: calc(0.375rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5;
}

.col-form-label-lg {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 1.25rem;
  line-height: 1.5;
}

.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.875rem;
  line-height: 1.5;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 0.375rem 0;
  margin-bottom: 0;
  font-size: 1rem;
  line-height: 1.5;
  color: #212529;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}

.form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm {
  height: calc(1.5em + 0.5rem + 2px);
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

.form-control-lg {
  height: calc(1.5em + 1rem + 2px);
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

select.form-control[size], select.form-control[multiple] {
  height: auto;
}

textarea.form-control {
  height: auto;
}

.form-group {
  margin-bottom: 1rem;
}

.form-text {
  display: block;
  margin-top: 0.25rem;
}

.form-row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px;
}

.form-row > .col,
.form-row > [class*="col-"] {
  padding-right: 5px;
  padding-left: 5px;
}

.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem;
}

.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem;
}

.form-check-input[disabled] ~ .form-check-label,
.form-check-input:disabled ~ .form-check-label {
  color: #6c757d;
}

.form-check-label {
  margin-bottom: 0;
}

.form-check-inline {
  display: -ms-inline-flexbox;
  display: inline-flex;
  -ms-flex-align: center;
  align-items: center;
  padding-left: 0;
  margin-right: 0.75rem;
}

.form-check-inline .form-check-input {
  position: static;
  margin-top: 0;
  margin-right: 0.3125rem;
  margin-left: 0;
}

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #28a745;
}

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  line-height: 1.5;
  color: #fff;
  background-color: rgba(40, 167, 69, 0.9);
  border-radius: 0.25rem;
}

.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip,
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .form-control:valid, .form-control.is-valid {
  border-color: #28a745;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .form-control:valid:focus, .form-control.is-valid:focus {
  border-color: #28a745;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.was-validated textarea.form-control:valid, textarea.form-control.is-valid {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

.was-validated .custom-select:valid, .custom-select.is-valid {
  border-color: #28a745;
  padding-right: calc(0.75em + 2.3125rem);
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .custom-select:valid:focus, .custom-select.is-valid:focus {
  border-color: #28a745;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #28a745;
}

.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
  color: #28a745;
}

.was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
  border-color: #28a745;
}

.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  border-color: #34ce57;
  background-color: #34ce57;
}

.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.was-validated .custom-control-input:valid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-valid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #28a745;
}

.was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #28a745;
}

.was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
  border-color: #28a745;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #dc3545;
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  line-height: 1.5;
  color: #fff;
  background-color: rgba(220, 53, 69, 0.9);
  border-radius: 0.25rem;
}

.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-control:invalid, .form-control.is-invalid {
  border-color: #dc3545;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

.was-validated .custom-select:invalid, .custom-select.is-invalid {
  border-color: #dc3545;
  padding-right: calc(0.75em + 2.3125rem);
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .custom-select:invalid:focus, .custom-select.is-invalid:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #dc3545;
}

.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
  color: #dc3545;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
  border-color: #dc3545;
}

.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
  border-color: #e4606d;
  background-color: #e4606d;
}

.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #dc3545;
}

.was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
  border-color: #dc3545;
}

.was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.form-inline {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
  flex-flow: row wrap;
  -ms-flex-align: center;
  align-items: center;
}

.form-inline .form-check {
  width: 100%;
}

@media (min-width: 576px) {
  .form-inline label {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin-bottom: 0;
  }
  .form-inline .form-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    -ms-flex-align: center;
    align-items: center;
    margin-bottom: 0;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .form-control-plaintext {
    display: inline-block;
  }
  .form-inline .input-group,
  .form-inline .custom-select {
    width: auto;
  }
  .form-inline .form-check {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: auto;
    padding-left: 0;
  }
  .form-inline .form-check-input {
    position: relative;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    margin-top: 0;
    margin-right: 0.25rem;
    margin-left: 0;
  }
  .form-inline .custom-control {
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
  }
  .form-inline .custom-control-label {
    margin-bottom: 0;
  }
}

.btn {
  display: inline-block;
  font-weight: 400;
  color: #212529;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .btn {
    transition: none;
  }
}

.btn:hover {
  color: #212529;
  text-decoration: none;
}

.btn:focus, .btn.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.btn.disabled, .btn:disabled {
  opacity: 0.65;
}

a.btn.disabled,
fieldset:disabled a.btn {
  pointer-events: none;
}

.btn-primary {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
}

.btn-primary:focus, .btn-primary.focus {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
  box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
}

.btn-primary.disabled, .btn-primary:disabled {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
.show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #0062cc;
  border-color: #005cbf;
}

.btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
}

.btn-secondary {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-secondary:hover {
  color: #fff;
  background-color: #5a6268;
  border-color: #545b62;
}

.btn-secondary:focus, .btn-secondary.focus {
  color: #fff;
  background-color: #5a6268;
  border-color: #545b62;
  box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
}

.btn-secondary.disabled, .btn-secondary:disabled {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
.show > .btn-secondary.dropdown-toggle {
  color: #fff;
  background-color: #545b62;
  border-color: #4e555b;
}

.btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
.show > .btn-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
}

.btn-success {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}

.btn-success:hover {
  color: #fff;
  background-color: #218838;
  border-color: #1e7e34;
}

.btn-success:focus, .btn-success.focus {
  color: #fff;
  background-color: #218838;
  border-color: #1e7e34;
  box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
}

.btn-success.disabled, .btn-success:disabled {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}

.btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
.show > .btn-success.dropdown-toggle {
  color: #fff;
  background-color: #1e7e34;
  border-color: #1c7430;
}

.btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
.show > .btn-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
}

.btn-info {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
}

.btn-info:hover {
  color: #fff;
  background-color: #138496;
  border-color: #117a8b;
}

.btn-info:focus, .btn-info.focus {
  color: #fff;
  background-color: #138496;
  border-color: #117a8b;
  box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
}

.btn-info.disabled, .btn-info:disabled {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
}

.btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
.show > .btn-info.dropdown-toggle {
  color: #fff;
  background-color: #117a8b;
  border-color: #10707f;
}

.btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
.show > .btn-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
}

.btn-warning {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107;
}

.btn-warning:hover {
  color: #212529;
  background-color: #e0a800;
  border-color: #d39e00;
}

.btn-warning:focus, .btn-warning.focus {
  color: #212529;
  background-color: #e0a800;
  border-color: #d39e00;
  box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
}

.btn-warning.disabled, .btn-warning:disabled {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107;
}

.btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
.show > .btn-warning.dropdown-toggle {
  color: #212529;
  background-color: #d39e00;
  border-color: #c69500;
}

.btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
.show > .btn-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
}

.btn-danger {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-danger:hover {
  color: #fff;
  background-color: #c82333;
  border-color: #bd2130;
}

.btn-danger:focus, .btn-danger.focus {
  color: #fff;
  background-color: #c82333;
  border-color: #bd2130;
  box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
}

.btn-danger.disabled, .btn-danger:disabled {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
.show > .btn-danger.dropdown-toggle {
  color: #fff;
  background-color: #bd2130;
  border-color: #b21f2d;
}

.btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
.show > .btn-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
}

.btn-light {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-light:hover {
  color: #212529;
  background-color: #e2e6ea;
  border-color: #dae0e5;
}

.btn-light:focus, .btn-light.focus {
  color: #212529;
  background-color: #e2e6ea;
  border-color: #dae0e5;
  box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
}

.btn-light.disabled, .btn-light:disabled {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
.show > .btn-light.dropdown-toggle {
  color: #212529;
  background-color: #dae0e5;
  border-color: #d3d9df;
}

.btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
.show > .btn-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
}

.btn-dark {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-dark:hover {
  color: #fff;
  background-color: #23272b;
  border-color: #1d2124;
}

.btn-dark:focus, .btn-dark.focus {
  color: #fff;
  background-color: #23272b;
  border-color: #1d2124;
  box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
}

.btn-dark.disabled, .btn-dark:disabled {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
.show > .btn-dark.dropdown-toggle {
  color: #fff;
  background-color: #1d2124;
  border-color: #171a1d;
}

.btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
.show > .btn-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
}

.btn-outline-primary {
  color: #007bff;
  border-color: #007bff;
}

.btn-outline-primary:hover {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-outline-primary:focus, .btn-outline-primary.focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}

.btn-outline-primary.disabled, .btn-outline-primary:disabled {
  color: #007bff;
  background-color: transparent;
}

.btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
.show > .btn-outline-primary.dropdown-toggle {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}

.btn-outline-secondary {
  color: #6c757d;
  border-color: #6c757d;
}

.btn-outline-secondary:hover {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-outline-secondary:focus, .btn-outline-secondary.focus {
  box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}

.btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
  color: #6c757d;
  background-color: transparent;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
.show > .btn-outline-secondary.dropdown-toggle {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}

.btn-outline-success {
  color: #28a745;
  border-color: #28a745;
}

.btn-outline-success:hover {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}

.btn-outline-success:focus, .btn-outline-success.focus {
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
}

.btn-outline-success.disabled, .btn-outline-success:disabled {
  color: #28a745;
  background-color: transparent;
}

.btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
.show > .btn-outline-success.dropdown-toggle {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}

.btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
}

.btn-outline-info {
  color: #17a2b8;
  border-color: #17a2b8;
}

.btn-outline-info:hover {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
}

.btn-outline-info:focus, .btn-outline-info.focus {
  box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
}

.btn-outline-info.disabled, .btn-outline-info:disabled {
  color: #17a2b8;
  background-color: transparent;
}

.btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
.show > .btn-outline-info.dropdown-toggle {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
}

.btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
}

.btn-outline-warning {
  color: #ffc107;
  border-color: #ffc107;
}

.btn-outline-warning:hover {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107;
}

.btn-outline-warning:focus, .btn-outline-warning.focus {
  box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
}

.btn-outline-warning.disabled, .btn-outline-warning:disabled {
  color: #ffc107;
  background-color: transparent;
}

.btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
.show > .btn-outline-warning.dropdown-toggle {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107;
}

.btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
}

.btn-outline-danger {
  color: #dc3545;
  border-color: #dc3545;
}

.btn-outline-danger:hover {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-outline-danger:focus, .btn-outline-danger.focus {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}

.btn-outline-danger.disabled, .btn-outline-danger:disabled {
  color: #dc3545;
  background-color: transparent;
}

.btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
.show > .btn-outline-danger.dropdown-toggle {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}

.btn-outline-light {
  color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-outline-light:hover {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-outline-light:focus, .btn-outline-light.focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.btn-outline-light.disabled, .btn-outline-light:disabled {
  color: #f8f9fa;
  background-color: transparent;
}

.btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
.show > .btn-outline-light.dropdown-toggle {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.btn-outline-dark {
  color: #343a40;
  border-color: #343a40;
}

.btn-outline-dark:hover {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-outline-dark:focus, .btn-outline-dark.focus {
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}

.btn-outline-dark.disabled, .btn-outline-dark:disabled {
  color: #343a40;
  background-color: transparent;
}

.btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
.show > .btn-outline-dark.dropdown-toggle {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}

.btn-link {
  font-weight: 400;
  color: #007bff;
  text-decoration: none;
}

.btn-link:hover {
  color: #0056b3;
  text-decoration: underline;
}

.btn-link:focus, .btn-link.focus {
  text-decoration: underline;
  box-shadow: none;
}

.btn-link:disabled, .btn-link.disabled {
  color: #6c757d;
  pointer-events: none;
}

.btn-lg, .btn-group-lg > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

.btn-sm, .btn-group-sm > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

.btn-block {
  display: block;
  width: 100%;
}

.btn-block + .btn-block {
  margin-top: 0.5rem;
}

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}

.fade {
  transition: opacity 0.15s linear;
}

@media (prefers-reduced-motion: reduce) {
  .fade {
    transition: none;
  }
}

.fade:not(.show) {
  opacity: 0;
}

.collapse:not(.show) {
  display: none;
}

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}

@media (prefers-reduced-motion: reduce) {
  .collapsing {
    transition: none;
  }
}

.dropup,
.dropright,
.dropdown,
.dropleft {
  position: relative;
}

.dropdown-toggle {
  white-space: nowrap;
}

.dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}

.dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0.125rem 0 0;
  font-size: 1rem;
  color: #212529;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem;
}

.dropdown-menu-left {
  right: auto;
  left: 0;
}

.dropdown-menu-right {
  right: 0;
  left: auto;
}

@media (min-width: 576px) {
  .dropdown-menu-sm-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-sm-right {
    right: 0;
    left: auto;
  }
}

@media (min-width: 768px) {
  .dropdown-menu-md-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-md-right {
    right: 0;
    left: auto;
  }
}

@media (min-width: 992px) {
  .dropdown-menu-lg-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-lg-right {
    right: 0;
    left: auto;
  }
}

@media (min-width: 1200px) {
  .dropdown-menu-xl-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xl-right {
    right: 0;
    left: auto;
  }
}

.dropup .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0.125rem;
}

.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}

.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropright .dropdown-menu {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0.125rem;
}

.dropright .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}

.dropright .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropright .dropdown-toggle::after {
  vertical-align: 0;
}

.dropleft .dropdown-menu {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0.125rem;
}

.dropleft .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
}

.dropleft .dropdown-toggle::after {
  display: none;
}

.dropleft .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}

.dropleft .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropleft .dropdown-toggle::before {
  vertical-align: 0;
}

.dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
  right: auto;
  bottom: auto;
}

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #e9ecef;
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1.5rem;
  clear: both;
  font-weight: 400;
  color: #212529;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}

.dropdown-item:hover, .dropdown-item:focus {
  color: #16181b;
  text-decoration: none;
  background-color: #f8f9fa;
}

.dropdown-item.active, .dropdown-item:active {
  color: #fff;
  text-decoration: none;
  background-color: #007bff;
}

.dropdown-item.disabled, .dropdown-item:disabled {
  color: #6c757d;
  pointer-events: none;
  background-color: transparent;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-header {
  display: block;
  padding: 0.5rem 1.5rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #6c757d;
  white-space: nowrap;
}

.dropdown-item-text {
  display: block;
  padding: 0.25rem 1.5rem;
  color: #212529;
}

.btn-group,
.btn-group-vertical {
  position: relative;
  display: -ms-inline-flexbox;
  display: inline-flex;
  vertical-align: middle;
}

.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
}

.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover {
  z-index: 1;
}

.btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
.btn-group-vertical > .btn:focus,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn.active {
  z-index: 1;
}

.btn-toolbar {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-pack: start;
  justify-content: flex-start;
}

.btn-toolbar .input-group {
  width: auto;
}

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) {
  margin-left: -1px;
}

.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
  padding-right: 0.5625rem;
  padding-left: 0.5625rem;
}

.dropdown-toggle-split::after,
.dropup .dropdown-toggle-split::after,
.dropright .dropdown-toggle-split::after {
  margin-left: 0;
}

.dropleft .dropdown-toggle-split::before {
  margin-right: 0;
}

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 0.375rem;
  padding-left: 0.375rem;
}

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem;
}

.btn-group-vertical {
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-align: start;
  align-items: flex-start;
  -ms-flex-pack: center;
  justify-content: center;
}

.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group {
  width: 100%;
}

.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) {
  margin-top: -1px;
}

.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.btn-group-toggle > .btn,
.btn-group-toggle > .btn-group > .btn {
  margin-bottom: 0;
}

.btn-group-toggle > .btn input[type="radio"],
.btn-group-toggle > .btn input[type="checkbox"],
.btn-group-toggle > .btn-group > .btn input[type="radio"],
.btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}

.input-group {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-align: stretch;
  align-items: stretch;
  width: 100%;
}

.input-group > .form-control,
.input-group > .form-control-plaintext,
.input-group > .custom-select,
.input-group > .custom-file {
  position: relative;
  -ms-flex: 1 1 0%;
  flex: 1 1 0%;
  min-width: 0;
  margin-bottom: 0;
}

.input-group > .form-control + .form-control,
.input-group > .form-control + .custom-select,
.input-group > .form-control + .custom-file,
.input-group > .form-control-plaintext + .form-control,
.input-group > .form-control-plaintext + .custom-select,
.input-group > .form-control-plaintext + .custom-file,
.input-group > .custom-select + .form-control,
.input-group > .custom-select + .custom-select,
.input-group > .custom-select + .custom-file,
.input-group > .custom-file + .form-control,
.input-group > .custom-file + .custom-select,
.input-group > .custom-file + .custom-file {
  margin-left: -1px;
}

.input-group > .form-control:focus,
.input-group > .custom-select:focus,
.input-group > .custom-file .custom-file-input:focus ~ .custom-file-label {
  z-index: 3;
}

.input-group > .custom-file .custom-file-input:focus {
  z-index: 4;
}

.input-group > .form-control:not(:last-child),
.input-group > .custom-select:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .form-control:not(:first-child),
.input-group > .custom-select:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.input-group > .custom-file {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
}

.input-group > .custom-file:not(:last-child) .custom-file-label,
.input-group > .custom-file:not(:last-child) .custom-file-label::after {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .custom-file:not(:first-child) .custom-file-label {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.input-group-prepend,
.input-group-append {
  display: -ms-flexbox;
  display: flex;
}

.input-group-prepend .btn,
.input-group-append .btn {
  position: relative;
  z-index: 2;
}

.input-group-prepend .btn:focus,
.input-group-append .btn:focus {
  z-index: 3;
}

.input-group-prepend .btn + .btn,
.input-group-prepend .btn + .input-group-text,
.input-group-prepend .input-group-text + .input-group-text,
.input-group-prepend .input-group-text + .btn,
.input-group-append .btn + .btn,
.input-group-append .btn + .input-group-text,
.input-group-append .input-group-text + .input-group-text,
.input-group-append .input-group-text + .btn {
  margin-left: -1px;
}

.input-group-prepend {
  margin-right: -1px;
}

.input-group-append {
  margin-left: -1px;
}

.input-group-text {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding: 0.375rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  text-align: center;
  white-space: nowrap;
  background-color: #e9ecef;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
}

.input-group-text input[type="radio"],
.input-group-text input[type="checkbox"] {
  margin-top: 0;
}

.input-group-lg > .form-control:not(textarea),
.input-group-lg > .custom-select {
  height: calc(1.5em + 1rem + 2px);
}

.input-group-lg > .form-control,
.input-group-lg > .custom-select,
.input-group-lg > .input-group-prepend > .input-group-text,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.input-group-lg > .input-group-append > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

.input-group-sm > .form-control:not(textarea),
.input-group-sm > .custom-select {
  height: calc(1.5em + 0.5rem + 2px);
}

.input-group-sm > .form-control,
.input-group-sm > .custom-select,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-append > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

.input-group-lg > .custom-select,
.input-group-sm > .custom-select {
  padding-right: 1.75rem;
}

.input-group > .input-group-prepend > .btn,
.input-group > .input-group-prepend > .input-group-text,
.input-group > .input-group-append:not(:last-child) > .btn,
.input-group > .input-group-append:not(:last-child) > .input-group-text,
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .input-group-append > .btn,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.custom-control {
  position: relative;
  display: block;
  min-height: 1.5rem;
  padding-left: 1.5rem;
}

.custom-control-inline {
  display: -ms-inline-flexbox;
  display: inline-flex;
  margin-right: 1rem;
}

.custom-control-input {
  position: absolute;
  left: 0;
  z-index: -1;
  width: 1rem;
  height: 1.25rem;
  opacity: 0;
}

.custom-control-input:checked ~ .custom-control-label::before {
  color: #fff;
  border-color: #007bff;
  background-color: #007bff;
}

.custom-control-input:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #80bdff;
}

.custom-control-input:not(:disabled):active ~ .custom-control-label::before {
  color: #fff;
  background-color: #b3d7ff;
  border-color: #b3d7ff;
}

.custom-control-input[disabled] ~ .custom-control-label, .custom-control-input:disabled ~ .custom-control-label {
  color: #6c757d;
}

.custom-control-input[disabled] ~ .custom-control-label::before, .custom-control-input:disabled ~ .custom-control-label::before {
  background-color: #e9ecef;
}

.custom-control-label {
  position: relative;
  margin-bottom: 0;
  vertical-align: top;
}

.custom-control-label::before {
  position: absolute;
  top: 0.25rem;
  left: -1.5rem;
  display: block;
  width: 1rem;
  height: 1rem;
  pointer-events: none;
  content: "";
  background-color: #fff;
  border: #adb5bd solid 1px;
}

.custom-control-label::after {
  position: absolute;
  top: 0.25rem;
  left: -1.5rem;
  display: block;
  width: 1rem;
  height: 1rem;
  content: "";
  background: no-repeat 50% / 50% 50%;
}

.custom-checkbox .custom-control-label::before {
  border-radius: 0.25rem;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3e%3c/svg%3e");
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
  border-color: #007bff;
  background-color: #007bff;
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e");
}

.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-radio .custom-control-label::before {
  border-radius: 50%;
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}

.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-switch {
  padding-left: 2.25rem;
}

.custom-switch .custom-control-label::before {
  left: -2.25rem;
  width: 1.75rem;
  pointer-events: all;
  border-radius: 0.5rem;
}

.custom-switch .custom-control-label::after {
  top: calc(0.25rem + 2px);
  left: calc(-2.25rem + 2px);
  width: calc(1rem - 4px);
  height: calc(1rem - 4px);
  background-color: #adb5bd;
  border-radius: 0.5rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out;
  transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .custom-switch .custom-control-label::after {
    transition: none;
  }
}

.custom-switch .custom-control-input:checked ~ .custom-control-label::after {
  background-color: #fff;
  -webkit-transform: translateX(0.75rem);
  transform: translateX(0.75rem);
}

.custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-select {
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 1.75rem 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  vertical-align: middle;
  background: #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

.custom-select:focus {
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-select:focus::-ms-value {
  color: #495057;
  background-color: #fff;
}

.custom-select[multiple], .custom-select[size]:not([size="1"]) {
  height: auto;
  padding-right: 0.75rem;
  background-image: none;
}

.custom-select:disabled {
  color: #6c757d;
  background-color: #e9ecef;
}

.custom-select::-ms-expand {
  display: none;
}

.custom-select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #495057;
}

.custom-select-sm {
  height: calc(1.5em + 0.5rem + 2px);
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  padding-left: 0.5rem;
  font-size: 0.875rem;
}

.custom-select-lg {
  height: calc(1.5em + 1rem + 2px);
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1rem;
  font-size: 1.25rem;
}

.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  margin-bottom: 0;
}

.custom-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  margin: 0;
  opacity: 0;
}

.custom-file-input:focus ~ .custom-file-label {
  border-color: #80bdff;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-file-input[disabled] ~ .custom-file-label,
.custom-file-input:disabled ~ .custom-file-label {
  background-color: #e9ecef;
}

.custom-file-input:lang(en) ~ .custom-file-label::after {
  content: "Browse";
}

.custom-file-input ~ .custom-file-label[data-browse]::after {
  content: attr(data-browse);
}

.custom-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
}

.custom-file-label::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 3;
  display: block;
  height: calc(1.5em + 0.75rem);
  padding: 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  content: "Browse";
  background-color: #e9ecef;
  border-left: inherit;
  border-radius: 0 0.25rem 0.25rem 0;
}

.custom-range {
  width: 100%;
  height: 1.4rem;
  padding: 0;
  background-color: transparent;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

.custom-range:focus {
  outline: none;
}

.custom-range:focus::-webkit-slider-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-range:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-range:focus::-ms-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-range::-moz-focus-outer {
  border: 0;
}

.custom-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -0.25rem;
  background-color: #007bff;
  border: 0;
  border-radius: 1rem;
  -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -webkit-appearance: none;
  appearance: none;
}

@media (prefers-reduced-motion: reduce) {
  .custom-range::-webkit-slider-thumb {
    -webkit-transition: none;
    transition: none;
  }
}

.custom-range::-webkit-slider-thumb:active {
  background-color: #b3d7ff;
}

.custom-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}

.custom-range::-moz-range-thumb {
  width: 1rem;
  height: 1rem;
  background-color: #007bff;
  border: 0;
  border-radius: 1rem;
  -moz-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -moz-appearance: none;
  appearance: none;
}

@media (prefers-reduced-motion: reduce) {
  .custom-range::-moz-range-thumb {
    -moz-transition: none;
    transition: none;
  }
}

.custom-range::-moz-range-thumb:active {
  background-color: #b3d7ff;
}

.custom-range::-moz-range-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}

.custom-range::-ms-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: 0;
  margin-right: 0.2rem;
  margin-left: 0.2rem;
  background-color: #007bff;
  border: 0;
  border-radius: 1rem;
  -ms-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}

@media (prefers-reduced-motion: reduce) {
  .custom-range::-ms-thumb {
    -ms-transition: none;
    transition: none;
  }
}

.custom-range::-ms-thumb:active {
  background-color: #b3d7ff;
}

.custom-range::-ms-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: transparent;
  border-color: transparent;
  border-width: 0.5rem;
}

.custom-range::-ms-fill-lower {
  background-color: #dee2e6;
  border-radius: 1rem;
}

.custom-range::-ms-fill-upper {
  margin-right: 15px;
  background-color: #dee2e6;
  border-radius: 1rem;
}

.custom-range:disabled::-webkit-slider-thumb {
  background-color: #adb5bd;
}

.custom-range:disabled::-webkit-slider-runnable-track {
  cursor: default;
}

.custom-range:disabled::-moz-range-thumb {
  background-color: #adb5bd;
}

.custom-range:disabled::-moz-range-track {
  cursor: default;
}

.custom-range:disabled::-ms-thumb {
  background-color: #adb5bd;
}

.custom-control-label::before,
.custom-file-label,
.custom-select {
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .custom-control-label::before,
  .custom-file-label,
  .custom-select {
    transition: none;
  }
}

.nav {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: 0.5rem 1rem;
}

.nav-link:hover, .nav-link:focus {
  text-decoration: none;
}

.nav-link.disabled {
  color: #6c757d;
  pointer-events: none;
  cursor: default;
}

.nav-tabs {
  border-bottom: 1px solid #dee2e6;
}

.nav-tabs .nav-item {
  margin-bottom: -1px;
}

.nav-tabs .nav-link {
  border: 1px solid transparent;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
  border-color: #e9ecef #e9ecef #dee2e6;
}

.nav-tabs .nav-link.disabled {
  color: #6c757d;
  background-color: transparent;
  border-color: transparent;
}

.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: #495057;
  background-color: #fff;
  border-color: #dee2e6 #dee2e6 #fff;
}

.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav-pills .nav-link {
  border-radius: 0.25rem;
}

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #007bff;
}

.nav-fill .nav-item {
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  text-align: center;
}

.nav-justified .nav-item {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -ms-flex-positive: 1;
  flex-grow: 1;
  text-align: center;
}

.tab-content > .tab-pane {
  display: none;
}

.tab-content > .active {
  display: block;
}

.navbar {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 0.5rem 1rem;
}

.navbar .container,
.navbar .container-fluid, .navbar .container-sm, .navbar .container-md, .navbar .container-lg, .navbar .container-xl {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

.navbar-brand {
  display: inline-block;
  padding-top: 0.3125rem;
  padding-bottom: 0.3125rem;
  margin-right: 1rem;
  font-size: 1.25rem;
  line-height: inherit;
  white-space: nowrap;
}

.navbar-brand:hover, .navbar-brand:focus {
  text-decoration: none;
}

.navbar-nav {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.navbar-nav .nav-link {
  padding-right: 0;
  padding-left: 0;
}

.navbar-nav .dropdown-menu {
  position: static;
  float: none;
}

.navbar-text {
  display: inline-block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.navbar-collapse {
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  -ms-flex-positive: 1;
  flex-grow: 1;
  -ms-flex-align: center;
  align-items: center;
}

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

.navbar-toggler:hover, .navbar-toggler:focus {
  text-decoration: none;
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: no-repeat center center;
  background-size: 100% 100%;
}

@media (max-width: 575.98px) {
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid, .navbar-expand-sm > .container-sm, .navbar-expand-sm > .container-md, .navbar-expand-sm > .container-lg, .navbar-expand-sm > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 576px) {
  .navbar-expand-sm {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid, .navbar-expand-sm > .container-sm, .navbar-expand-sm > .container-md, .navbar-expand-sm > .container-lg, .navbar-expand-sm > .container-xl {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .navbar-expand-sm .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
}

@media (max-width: 767.98px) {
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid, .navbar-expand-md > .container-sm, .navbar-expand-md > .container-md, .navbar-expand-md > .container-lg, .navbar-expand-md > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 768px) {
  .navbar-expand-md {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid, .navbar-expand-md > .container-sm, .navbar-expand-md > .container-md, .navbar-expand-md > .container-lg, .navbar-expand-md > .container-xl {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .navbar-expand-md .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
}

@media (max-width: 991.98px) {
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid, .navbar-expand-lg > .container-sm, .navbar-expand-lg > .container-md, .navbar-expand-lg > .container-lg, .navbar-expand-lg > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 992px) {
  .navbar-expand-lg {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid, .navbar-expand-lg > .container-sm, .navbar-expand-lg > .container-md, .navbar-expand-lg > .container-lg, .navbar-expand-lg > .container-xl {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .navbar-expand-lg .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
}

@media (max-width: 1199.98px) {
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid, .navbar-expand-xl > .container-sm, .navbar-expand-xl > .container-md, .navbar-expand-xl > .container-lg, .navbar-expand-xl > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 1200px) {
  .navbar-expand-xl {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid, .navbar-expand-xl > .container-sm, .navbar-expand-xl > .container-md, .navbar-expand-xl > .container-lg, .navbar-expand-xl > .container-xl {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .navbar-expand-xl .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
}

.navbar-expand {
  -ms-flex-flow: row nowrap;
  flex-flow: row nowrap;
  -ms-flex-pack: start;
  justify-content: flex-start;
}

.navbar-expand > .container,
.navbar-expand > .container-fluid, .navbar-expand > .container-sm, .navbar-expand > .container-md, .navbar-expand > .container-lg, .navbar-expand > .container-xl {
  padding-right: 0;
  padding-left: 0;
}

.navbar-expand .navbar-nav {
  -ms-flex-direction: row;
  flex-direction: row;
}

.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}

.navbar-expand .navbar-nav .nav-link {
  padding-right: 0.5rem;
  padding-left: 0.5rem;
}

.navbar-expand > .container,
.navbar-expand > .container-fluid, .navbar-expand > .container-sm, .navbar-expand > .container-md, .navbar-expand > .container-lg, .navbar-expand > .container-xl {
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
}

.navbar-expand .navbar-collapse {
  display: -ms-flexbox !important;
  display: flex !important;
  -ms-flex-preferred-size: auto;
  flex-basis: auto;
}

.navbar-expand .navbar-toggler {
  display: none;
}

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
  color: rgba(0, 0, 0, 0.7);
}

.navbar-light .navbar-nav .nav-link.disabled {
  color: rgba(0, 0, 0, 0.3);
}

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.5);
  border-color: rgba(0, 0, 0, 0.1);
}

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 0.5)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-text a {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-dark .navbar-brand {
  color: #fff;
}

.navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
  color: #fff;
}

.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
  color: rgba(255, 255, 255, 0.75);
}

.navbar-dark .navbar-nav .nav-link.disabled {
  color: rgba(255, 255, 255, 0.25);
}

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff;
}

.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.5);
  border-color: rgba(255, 255, 255, 0.1);
}

.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 0.5)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-text a {
  color: #fff;
}

.navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
  color: #fff;
}

.card {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
}

.card > hr {
  margin-right: 0;
  margin-left: 0;
}

.card > .list-group:first-child .list-group-item:first-child {
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.card > .list-group:last-child .list-group-item:last-child {
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.card-body {
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  min-height: 1px;
  padding: 1.25rem;
}

.card-title {
  margin-bottom: 0.75rem;
}

.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0;
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link:hover {
  text-decoration: none;
}

.card-link + .card-link {
  margin-left: 1.25rem;
}

.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}

.card-header:first-child {
  border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}

.card-header + .list-group .list-group-item:first-child {
  border-top: 0;
}

.card-footer {
  padding: 0.75rem 1.25rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid rgba(0, 0, 0, 0.125);
}

.card-footer:last-child {
  border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
}

.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -0.75rem;
  margin-left: -0.625rem;
  border-bottom: 0;
}

.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem;
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem;
}

.card-img,
.card-img-top,
.card-img-bottom {
  -ms-flex-negative: 0;
  flex-shrink: 0;
  width: 100%;
}

.card-img,
.card-img-top {
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}

.card-img,
.card-img-bottom {
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}

.card-deck .card {
  margin-bottom: 15px;
}

@media (min-width: 576px) {
  .card-deck {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    margin-right: -15px;
    margin-left: -15px;
  }
  .card-deck .card {
    -ms-flex: 1 0 0%;
    flex: 1 0 0%;
    margin-right: 15px;
    margin-bottom: 0;
    margin-left: 15px;
  }
}

.card-group > .card {
  margin-bottom: 15px;
}

@media (min-width: 576px) {
  .card-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
  }
  .card-group > .card {
    -ms-flex: 1 0 0%;
    flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group > .card:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-top,
  .card-group > .card:not(:last-child) .card-header {
    border-top-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-bottom,
  .card-group > .card:not(:last-child) .card-footer {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-top,
  .card-group > .card:not(:first-child) .card-header {
    border-top-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-bottom,
  .card-group > .card:not(:first-child) .card-footer {
    border-bottom-left-radius: 0;
  }
}

.card-columns .card {
  margin-bottom: 0.75rem;
}

@media (min-width: 576px) {
  .card-columns {
    -webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 3;
    -webkit-column-gap: 1.25rem;
    -moz-column-gap: 1.25rem;
    column-gap: 1.25rem;
    orphans: 1;
    widows: 1;
  }
  .card-columns .card {
    display: inline-block;
    width: 100%;
  }
}

.accordion > .card {
  overflow: hidden;
}

.accordion > .card:not(:last-of-type) {
  border-bottom: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.accordion > .card:not(:first-of-type) {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.accordion > .card > .card-header {
  border-radius: 0;
  margin-bottom: -1px;
}

.breadcrumb {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: 0.75rem 1rem;
  margin-bottom: 1rem;
  list-style: none;
  background-color: #e9ecef;
  border-radius: 0.25rem;
}

.breadcrumb-item + .breadcrumb-item {
  padding-left: 0.5rem;
}

.breadcrumb-item + .breadcrumb-item::before {
  display: inline-block;
  padding-right: 0.5rem;
  color: #6c757d;
  content: "/";
}

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: underline;
}

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: none;
}

.breadcrumb-item.active {
  color: #6c757d;
}

.pagination {
  display: -ms-flexbox;
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0.25rem;
}

.page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #007bff;
  background-color: #fff;
  border: 1px solid #dee2e6;
}

.page-link:hover {
  z-index: 2;
  color: #0056b3;
  text-decoration: none;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.page-link:focus {
  z-index: 3;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.page-item:first-child .page-link {
  margin-left: 0;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.page-item:last-child .page-link {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}

.page-item.active .page-link {
  z-index: 3;
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.page-item.disabled .page-link {
  color: #6c757d;
  pointer-events: none;
  cursor: auto;
  background-color: #fff;
  border-color: #dee2e6;
}

.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
  line-height: 1.5;
}

.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem;
}

.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem;
}

.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
}

.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem;
}

.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem;
}

.badge {
  display: inline-block;
  padding: 0.25em 0.4em;
  font-size: 75%;
  font-weight: 700;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .badge {
    transition: none;
  }
}

a.badge:hover, a.badge:focus {
  text-decoration: none;
}

.badge:empty {
  display: none;
}

.btn .badge {
  position: relative;
  top: -1px;
}

.badge-pill {
  padding-right: 0.6em;
  padding-left: 0.6em;
  border-radius: 10rem;
}

.badge-primary {
  color: #fff;
  background-color: #007bff;
}

a.badge-primary:hover, a.badge-primary:focus {
  color: #fff;
  background-color: #0062cc;
}

a.badge-primary:focus, a.badge-primary.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}

.badge-secondary {
  color: #fff;
  background-color: #6c757d;
}

a.badge-secondary:hover, a.badge-secondary:focus {
  color: #fff;
  background-color: #545b62;
}

a.badge-secondary:focus, a.badge-secondary.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}

.badge-success {
  color: #fff;
  background-color: #28a745;
}

a.badge-success:hover, a.badge-success:focus {
  color: #fff;
  background-color: #1e7e34;
}

a.badge-success:focus, a.badge-success.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
}

.badge-info {
  color: #fff;
  background-color: #17a2b8;
}

a.badge-info:hover, a.badge-info:focus {
  color: #fff;
  background-color: #117a8b;
}

a.badge-info:focus, a.badge-info.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
}

.badge-warning {
  color: #212529;
  background-color: #ffc107;
}

a.badge-warning:hover, a.badge-warning:focus {
  color: #212529;
  background-color: #d39e00;
}

a.badge-warning:focus, a.badge-warning.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
}

.badge-danger {
  color: #fff;
  background-color: #dc3545;
}

a.badge-danger:hover, a.badge-danger:focus {
  color: #fff;
  background-color: #bd2130;
}

a.badge-danger:focus, a.badge-danger.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}

.badge-light {
  color: #212529;
  background-color: #f8f9fa;
}

a.badge-light:hover, a.badge-light:focus {
  color: #212529;
  background-color: #dae0e5;
}

a.badge-light:focus, a.badge-light.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.badge-dark {
  color: #fff;
  background-color: #343a40;
}

a.badge-dark:hover, a.badge-dark:focus {
  color: #fff;
  background-color: #1d2124;
}

a.badge-dark:focus, a.badge-dark.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}

.jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-color: #e9ecef;
  border-radius: 0.3rem;
}

@media (min-width: 576px) {
  .jumbotron {
    padding: 4rem 2rem;
  }
}

.jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  border-radius: 0;
}

.alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 700;
}

.alert-dismissible {
  padding-right: 4rem;
}

.alert-dismissible .close {
  position: absolute;
  top: 0;
  right: 0;
  padding: 0.75rem 1.25rem;
  color: inherit;
}

.alert-primary {
  color: #004085;
  background-color: #cce5ff;
  border-color: #b8daff;
}

.alert-primary hr {
  border-top-color: #9fcdff;
}

.alert-primary .alert-link {
  color: #002752;
}

.alert-secondary {
  color: #383d41;
  background-color: #e2e3e5;
  border-color: #d6d8db;
}

.alert-secondary hr {
  border-top-color: #c8cbcf;
}

.alert-secondary .alert-link {
  color: #202326;
}

.alert-success {
  color: #155724;
  background-color: #d4edda;
  border-color: #c3e6cb;
}

.alert-success hr {
  border-top-color: #b1dfbb;
}

.alert-success .alert-link {
  color: #0b2e13;
}

.alert-info {
  color: #0c5460;
  background-color: #d1ecf1;
  border-color: #bee5eb;
}

.alert-info hr {
  border-top-color: #abdde5;
}

.alert-info .alert-link {
  color: #062c33;
}

.alert-warning {
  color: #856404;
  background-color: #fff3cd;
  border-color: #ffeeba;
}

.alert-warning hr {
  border-top-color: #ffe8a1;
}

.alert-warning .alert-link {
  color: #533f03;
}

.alert-danger {
  color: #721c24;
  background-color: #f8d7da;
  border-color: #f5c6cb;
}

.alert-danger hr {
  border-top-color: #f1b0b7;
}

.alert-danger .alert-link {
  color: #491217;
}

.alert-light {
  color: #818182;
  background-color: #fefefe;
  border-color: #fdfdfe;
}

.alert-light hr {
  border-top-color: #ececf6;
}

.alert-light .alert-link {
  color: #686868;
}

.alert-dark {
  color: #1b1e21;
  background-color: #d6d8d9;
  border-color: #c6c8ca;
}

.alert-dark hr {
  border-top-color: #b9bbbe;
}

.alert-dark .alert-link {
  color: #040505;
}

@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0;
  }
  to {
    background-position: 0 0;
  }
}

@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0;
  }
  to {
    background-position: 0 0;
  }
}

.progress {
  display: -ms-flexbox;
  display: flex;
  height: 1rem;
  overflow: hidden;
  font-size: 0.75rem;
  background-color: #e9ecef;
  border-radius: 0.25rem;
}

.progress-bar {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
  overflow: hidden;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #007bff;
  transition: width 0.6s ease;
}

@media (prefers-reduced-motion: reduce) {
  .progress-bar {
    transition: none;
  }
}

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem;
}

.progress-bar-animated {
  -webkit-animation: progress-bar-stripes 1s linear infinite;
  animation: progress-bar-stripes 1s linear infinite;
}

@media (prefers-reduced-motion: reduce) {
  .progress-bar-animated {
    -webkit-animation: none;
    animation: none;
  }
}

.media {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: start;
  align-items: flex-start;
}

.media-body {
  -ms-flex: 1;
  flex: 1;
}

.list-group {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
}

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit;
}

.list-group-item-action:hover, .list-group-item-action:focus {
  z-index: 1;
  color: #495057;
  text-decoration: none;
  background-color: #f8f9fa;
}

.list-group-item-action:active {
  color: #212529;
  background-color: #e9ecef;
}

.list-group-item {
  position: relative;
  display: block;
  padding: 0.75rem 1.25rem;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125);
}

.list-group-item:first-child {
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.list-group-item:last-child {
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.list-group-item.disabled, .list-group-item:disabled {
  color: #6c757d;
  pointer-events: none;
  background-color: #fff;
}

.list-group-item.active {
  z-index: 2;
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.list-group-item + .list-group-item {
  border-top-width: 0;
}

.list-group-item + .list-group-item.active {
  margin-top: -1px;
  border-top-width: 1px;
}

.list-group-horizontal {
  -ms-flex-direction: row;
  flex-direction: row;
}

.list-group-horizontal .list-group-item:first-child {
  border-bottom-left-radius: 0.25rem;
  border-top-right-radius: 0;
}

.list-group-horizontal .list-group-item:last-child {
  border-top-right-radius: 0.25rem;
  border-bottom-left-radius: 0;
}

.list-group-horizontal .list-group-item.active {
  margin-top: 0;
}

.list-group-horizontal .list-group-item + .list-group-item {
  border-top-width: 1px;
  border-left-width: 0;
}

.list-group-horizontal .list-group-item + .list-group-item.active {
  margin-left: -1px;
  border-left-width: 1px;
}

@media (min-width: 576px) {
  .list-group-horizontal-sm {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .list-group-horizontal-sm .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-sm .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-sm .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-sm .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-sm .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}

@media (min-width: 768px) {
  .list-group-horizontal-md {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .list-group-horizontal-md .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-md .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-md .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-md .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-md .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}

@media (min-width: 992px) {
  .list-group-horizontal-lg {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .list-group-horizontal-lg .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-lg .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-lg .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-lg .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-lg .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}

@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .list-group-horizontal-xl .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xl .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xl .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xl .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-xl .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}

.list-group-flush .list-group-item {
  border-right-width: 0;
  border-left-width: 0;
  border-radius: 0;
}

.list-group-flush .list-group-item:first-child {
  border-top-width: 0;
}

.list-group-flush:last-child .list-group-item:last-child {
  border-bottom-width: 0;
}

.list-group-item-primary {
  color: #004085;
  background-color: #b8daff;
}

.list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
  color: #004085;
  background-color: #9fcdff;
}

.list-group-item-primary.list-group-item-action.active {
  color: #fff;
  background-color: #004085;
  border-color: #004085;
}

.list-group-item-secondary {
  color: #383d41;
  background-color: #d6d8db;
}

.list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
  color: #383d41;
  background-color: #c8cbcf;
}

.list-group-item-secondary.list-group-item-action.active {
  color: #fff;
  background-color: #383d41;
  border-color: #383d41;
}

.list-group-item-success {
  color: #155724;
  background-color: #c3e6cb;
}

.list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
  color: #155724;
  background-color: #b1dfbb;
}

.list-group-item-success.list-group-item-action.active {
  color: #fff;
  background-color: #155724;
  border-color: #155724;
}

.list-group-item-info {
  color: #0c5460;
  background-color: #bee5eb;
}

.list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
  color: #0c5460;
  background-color: #abdde5;
}

.list-group-item-info.list-group-item-action.active {
  color: #fff;
  background-color: #0c5460;
  border-color: #0c5460;
}

.list-group-item-warning {
  color: #856404;
  background-color: #ffeeba;
}

.list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
  color: #856404;
  background-color: #ffe8a1;
}

.list-group-item-warning.list-group-item-action.active {
  color: #fff;
  background-color: #856404;
  border-color: #856404;
}

.list-group-item-danger {
  color: #721c24;
  background-color: #f5c6cb;
}

.list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
  color: #721c24;
  background-color: #f1b0b7;
}

.list-group-item-danger.list-group-item-action.active {
  color: #fff;
  background-color: #721c24;
  border-color: #721c24;
}

.list-group-item-light {
  color: #818182;
  background-color: #fdfdfe;
}

.list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
  color: #818182;
  background-color: #ececf6;
}

.list-group-item-light.list-group-item-action.active {
  color: #fff;
  background-color: #818182;
  border-color: #818182;
}

.list-group-item-dark {
  color: #1b1e21;
  background-color: #c6c8ca;
}

.list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
  color: #1b1e21;
  background-color: #b9bbbe;
}

.list-group-item-dark.list-group-item-action.active {
  color: #fff;
  background-color: #1b1e21;
  border-color: #1b1e21;
}

.close {
  float: right;
  font-size: 1.5rem;
  font-weight: 700;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: .5;
}

.close:hover {
  color: #000;
  text-decoration: none;
}

.close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {
  opacity: .75;
}

button.close {
  padding: 0;
  background-color: transparent;
  border: 0;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

a.close.disabled {
  pointer-events: none;
}

.toast {
  max-width: 350px;
  overflow: hidden;
  font-size: 0.875rem;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.1);
  box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
  -webkit-backdrop-filter: blur(10px);
  backdrop-filter: blur(10px);
  opacity: 0;
  border-radius: 0.25rem;
}

.toast:not(:last-child) {
  margin-bottom: 0.75rem;
}

.toast.showing {
  opacity: 1;
}

.toast.show {
  display: block;
  opacity: 1;
}

.toast.hide {
  display: none;
}

.toast-header {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding: 0.25rem 0.75rem;
  color: #6c757d;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}

.toast-body {
  padding: 0.75rem;
}

.modal-open {
  overflow: hidden;
}

.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}

.modal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050;
  display: none;
  width: 100%;
  height: 100%;
  overflow: hidden;
  outline: 0;
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none;
}

.modal.fade .modal-dialog {
  transition: -webkit-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
  transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
  -webkit-transform: translate(0, -50px);
  transform: translate(0, -50px);
}

@media (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
    transition: none;
  }
}

.modal.show .modal-dialog {
  -webkit-transform: none;
  transform: none;
}

.modal.modal-static .modal-dialog {
  -webkit-transform: scale(1.02);
  transform: scale(1.02);
}

.modal-dialog-scrollable {
  display: -ms-flexbox;
  display: flex;
  max-height: calc(100% - 1rem);
}

.modal-dialog-scrollable .modal-content {
  max-height: calc(100vh - 1rem);
  overflow: hidden;
}

.modal-dialog-scrollable .modal-header,
.modal-dialog-scrollable .modal-footer {
  -ms-flex-negative: 0;
  flex-shrink: 0;
}

.modal-dialog-scrollable .modal-body {
  overflow-y: auto;
}

.modal-dialog-centered {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  min-height: calc(100% - 1rem);
}

.modal-dialog-centered::before {
  display: block;
  height: calc(100vh - 1rem);
  content: "";
}

.modal-dialog-centered.modal-dialog-scrollable {
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
  height: 100%;
}

.modal-dialog-centered.modal-dialog-scrollable .modal-content {
  max-height: none;
}

.modal-dialog-centered.modal-dialog-scrollable::before {
  content: none;
}

.modal-content {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  outline: 0;
}

.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: #000;
}

.modal-backdrop.fade {
  opacity: 0;
}

.modal-backdrop.show {
  opacity: 0.5;
}

.modal-header {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: start;
  align-items: flex-start;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 1rem 1rem;
  border-bottom: 1px solid #dee2e6;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px);
}

.modal-header .close {
  padding: 1rem 1rem;
  margin: -1rem -1rem -1rem auto;
}

.modal-title {
  margin-bottom: 0;
  line-height: 1.5;
}

.modal-body {
  position: relative;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1rem;
}

.modal-footer {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: end;
  justify-content: flex-end;
  padding: 0.75rem;
  border-top: 1px solid #dee2e6;
  border-bottom-right-radius: calc(0.3rem - 1px);
  border-bottom-left-radius: calc(0.3rem - 1px);
}

.modal-footer > * {
  margin: 0.25rem;
}

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto;
  }
  .modal-dialog-scrollable {
    max-height: calc(100% - 3.5rem);
  }
  .modal-dialog-scrollable .modal-content {
    max-height: calc(100vh - 3.5rem);
  }
  .modal-dialog-centered {
    min-height: calc(100% - 3.5rem);
  }
  .modal-dialog-centered::before {
    height: calc(100vh - 3.5rem);
  }
  .modal-sm {
    max-width: 300px;
  }
}

@media (min-width: 992px) {
  .modal-lg,
  .modal-xl {
    max-width: 800px;
  }
}

@media (min-width: 1200px) {
  .modal-xl {
    max-width: 1140px;
  }
}

.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  opacity: 0;
}

.tooltip.show {
  opacity: 0.9;
}

.tooltip .arrow {
  position: absolute;
  display: block;
  width: 0.8rem;
  height: 0.4rem;
}

.tooltip .arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
  padding: 0.4rem 0;
}

.bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
  bottom: 0;
}

.bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
  top: 0;
  border-width: 0.4rem 0.4rem 0;
  border-top-color: #000;
}

.bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
  padding: 0 0.4rem;
}

.bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
  left: 0;
  width: 0.4rem;
  height: 0.8rem;
}

.bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
  right: 0;
  border-width: 0.4rem 0.4rem 0.4rem 0;
  border-right-color: #000;
}

.bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
  padding: 0.4rem 0;
}

.bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
  top: 0;
}

.bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  bottom: 0;
  border-width: 0 0.4rem 0.4rem;
  border-bottom-color: #000;
}

.bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
  padding: 0 0.4rem;
}

.bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
  right: 0;
  width: 0.4rem;
  height: 0.8rem;
}

.bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
  left: 0;
  border-width: 0.4rem 0 0.4rem 0.4rem;
  border-left-color: #000;
}

.tooltip-inner {
  max-width: 200px;
  padding: 0.25rem 0.5rem;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 0.25rem;
}

.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: block;
  max-width: 276px;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
}

.popover .arrow {
  position: absolute;
  display: block;
  width: 1rem;
  height: 0.5rem;
  margin: 0 0.3rem;
}

.popover .arrow::before, .popover .arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-popover-top, .bs-popover-auto[x-placement^="top"] {
  margin-bottom: 0.5rem;
}

.bs-popover-top > .arrow, .bs-popover-auto[x-placement^="top"] > .arrow {
  bottom: calc(-0.5rem - 1px);
}

.bs-popover-top > .arrow::before, .bs-popover-auto[x-placement^="top"] > .arrow::before {
  bottom: 0;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-top > .arrow::after, .bs-popover-auto[x-placement^="top"] > .arrow::after {
  bottom: 1px;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: #fff;
}

.bs-popover-right, .bs-popover-auto[x-placement^="right"] {
  margin-left: 0.5rem;
}

.bs-popover-right > .arrow, .bs-popover-auto[x-placement^="right"] > .arrow {
  left: calc(-0.5rem - 1px);
  width: 0.5rem;
  height: 1rem;
  margin: 0.3rem 0;
}

.bs-popover-right > .arrow::before, .bs-popover-auto[x-placement^="right"] > .arrow::before {
  left: 0;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-right > .arrow::after, .bs-popover-auto[x-placement^="right"] > .arrow::after {
  left: 1px;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: #fff;
}

.bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
  margin-top: 0.5rem;
}

.bs-popover-bottom > .arrow, .bs-popover-auto[x-placement^="bottom"] > .arrow {
  top: calc(-0.5rem - 1px);
}

.bs-popover-bottom > .arrow::before, .bs-popover-auto[x-placement^="bottom"] > .arrow::before {
  top: 0;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-bottom > .arrow::after, .bs-popover-auto[x-placement^="bottom"] > .arrow::after {
  top: 1px;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: #fff;
}

.bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: 1rem;
  margin-left: -0.5rem;
  content: "";
  border-bottom: 1px solid #f7f7f7;
}

.bs-popover-left, .bs-popover-auto[x-placement^="left"] {
  margin-right: 0.5rem;
}

.bs-popover-left > .arrow, .bs-popover-auto[x-placement^="left"] > .arrow {
  right: calc(-0.5rem - 1px);
  width: 0.5rem;
  height: 1rem;
  margin: 0.3rem 0;
}

.bs-popover-left > .arrow::before, .bs-popover-auto[x-placement^="left"] > .arrow::before {
  right: 0;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-left > .arrow::after, .bs-popover-auto[x-placement^="left"] > .arrow::after {
  right: 1px;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: #fff;
}

.popover-header {
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px);
}

.popover-header:empty {
  display: none;
}

.popover-body {
  padding: 0.5rem 0.75rem;
  color: #212529;
}

.carousel {
  position: relative;
}

.carousel.pointer-event {
  -ms-touch-action: pan-y;
  touch-action: pan-y;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.carousel-inner::after {
  display: block;
  clear: both;
  content: "";
}

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  transition: -webkit-transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-item {
    transition: none;
  }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}

.carousel-item-next:not(.carousel-item-left),
.active.carousel-item-right {
  -webkit-transform: translateX(100%);
  transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-right),
.active.carousel-item-left {
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
}

.carousel-fade .carousel-item {
  opacity: 0;
  transition-property: opacity;
  -webkit-transform: none;
  transform: none;
}

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
  z-index: 1;
  opacity: 1;
}

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
  z-index: 0;
  opacity: 0;
  transition: opacity 0s 0.6s;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-fade .active.carousel-item-left,
  .carousel-fade .active.carousel-item-right {
    transition: none;
  }
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 15%;
  color: #fff;
  text-align: center;
  opacity: 0.5;
  transition: opacity 0.15s ease;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-control-prev,
  .carousel-control-next {
    transition: none;
  }
}

.carousel-control-prev:hover, .carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}

.carousel-control-prev {
  left: 0;
}

.carousel-control-next {
  right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: no-repeat 50% / 100% 100%;
}

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e");
}

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 15;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
  justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none;
}

.carousel-indicators li {
  box-sizing: content-box;
  -ms-flex: 0 1 auto;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #fff;
  background-clip: padding-box;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  opacity: .5;
  transition: opacity 0.6s ease;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-indicators li {
    transition: none;
  }
}

.carousel-indicators .active {
  opacity: 1;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
}

@-webkit-keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

.spinner-border {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: text-bottom;
  border: 0.25em solid currentColor;
  border-right-color: transparent;
  border-radius: 50%;
  -webkit-animation: spinner-border .75s linear infinite;
  animation: spinner-border .75s linear infinite;
}

.spinner-border-sm {
  width: 1rem;
  height: 1rem;
  border-width: 0.2em;
}

@-webkit-keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  50% {
    opacity: 1;
  }
}

@keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  50% {
    opacity: 1;
  }
}

.spinner-grow {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: text-bottom;
  background-color: currentColor;
  border-radius: 50%;
  opacity: 0;
  -webkit-animation: spinner-grow .75s linear infinite;
  animation: spinner-grow .75s linear infinite;
}

.spinner-grow-sm {
  width: 1rem;
  height: 1rem;
}

.align-baseline {
  vertical-align: baseline !important;
}

.align-top {
  vertical-align: top !important;
}

.align-middle {
  vertical-align: middle !important;
}

.align-bottom {
  vertical-align: bottom !important;
}

.align-text-bottom {
  vertical-align: text-bottom !important;
}

.align-text-top {
  vertical-align: text-top !important;
}

.bg-primary {
  background-color: #007bff !important;
}

a.bg-primary:hover, a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
  background-color: #0062cc !important;
}

.bg-secondary {
  background-color: #6c757d !important;
}

a.bg-secondary:hover, a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #545b62 !important;
}

.bg-success {
  background-color: #28a745 !important;
}

a.bg-success:hover, a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
  background-color: #1e7e34 !important;
}

.bg-info {
  background-color: #17a2b8 !important;
}

a.bg-info:hover, a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #117a8b !important;
}

.bg-warning {
  background-color: #ffc107 !important;
}

a.bg-warning:hover, a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #d39e00 !important;
}

.bg-danger {
  background-color: #dc3545 !important;
}

a.bg-danger:hover, a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #bd2130 !important;
}

.bg-light {
  background-color: #f8f9fa !important;
}

a.bg-light:hover, a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: #dae0e5 !important;
}

.bg-dark {
  background-color: #343a40 !important;
}

a.bg-dark:hover, a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
  background-color: #1d2124 !important;
}

.bg-white {
  background-color: #fff !important;
}

.bg-transparent {
  background-color: transparent !important;
}

.border {
  border: 1px solid #dee2e6 !important;
}

.border-top {
  border-top: 1px solid #dee2e6 !important;
}

.border-right {
  border-right: 1px solid #dee2e6 !important;
}

.border-bottom {
  border-bottom: 1px solid #dee2e6 !important;
}

.border-left {
  border-left: 1px solid #dee2e6 !important;
}

.border-0 {
  border: 0 !important;
}

.border-top-0 {
  border-top: 0 !important;
}

.border-right-0 {
  border-right: 0 !important;
}

.border-bottom-0 {
  border-bottom: 0 !important;
}

.border-left-0 {
  border-left: 0 !important;
}

.border-primary {
  border-color: #007bff !important;
}

.border-secondary {
  border-color: #6c757d !important;
}

.border-success {
  border-color: #28a745 !important;
}

.border-info {
  border-color: #17a2b8 !important;
}

.border-warning {
  border-color: #ffc107 !important;
}

.border-danger {
  border-color: #dc3545 !important;
}

.border-light {
  border-color: #f8f9fa !important;
}

.border-dark {
  border-color: #343a40 !important;
}

.border-white {
  border-color: #fff !important;
}

.rounded-sm {
  border-radius: 0.2rem !important;
}

.rounded {
  border-radius: 0.25rem !important;
}

.rounded-top {
  border-top-left-radius: 0.25rem !important;
  border-top-right-radius: 0.25rem !important;
}

.rounded-right {
  border-top-right-radius: 0.25rem !important;
  border-bottom-right-radius: 0.25rem !important;
}

.rounded-bottom {
  border-bottom-right-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}

.rounded-left {
  border-top-left-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}

.rounded-lg {
  border-radius: 0.3rem !important;
}

.rounded-circle {
  border-radius: 50% !important;
}

.rounded-pill {
  border-radius: 50rem !important;
}

.rounded-0 {
  border-radius: 0 !important;
}

.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

.d-none {
  display: none !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.d-table {
  display: table !important;
}

.d-table-row {
  display: table-row !important;
}

.d-table-cell {
  display: table-cell !important;
}

.d-flex {
  display: -ms-flexbox !important;
  display: flex !important;
}

.d-inline-flex {
  display: -ms-inline-flexbox !important;
  display: inline-flex !important;
}

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media (min-width: 768px) {
  .d-md-none {
    display: none !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-md-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media print {
  .d-print-none {
    display: none !important;
  }
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-print-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden;
}

.embed-responsive::before {
  display: block;
  content: "";
}

.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}

.embed-responsive-21by9::before {
  padding-top: 42.857143%;
}

.embed-responsive-16by9::before {
  padding-top: 56.25%;
}

.embed-responsive-4by3::before {
  padding-top: 75%;
}

.embed-responsive-1by1::before {
  padding-top: 100%;
}

.flex-row {
  -ms-flex-direction: row !important;
  flex-direction: row !important;
}

.flex-column {
  -ms-flex-direction: column !important;
  flex-direction: column !important;
}

.flex-row-reverse {
  -ms-flex-direction: row-reverse !important;
  flex-direction: row-reverse !important;
}

.flex-column-reverse {
  -ms-flex-direction: column-reverse !important;
  flex-direction: column-reverse !important;
}

.flex-wrap {
  -ms-flex-wrap: wrap !important;
  flex-wrap: wrap !important;
}

.flex-nowrap {
  -ms-flex-wrap: nowrap !important;
  flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  -ms-flex-wrap: wrap-reverse !important;
  flex-wrap: wrap-reverse !important;
}

.flex-fill {
  -ms-flex: 1 1 auto !important;
  flex: 1 1 auto !important;
}

.flex-grow-0 {
  -ms-flex-positive: 0 !important;
  flex-grow: 0 !important;
}

.flex-grow-1 {
  -ms-flex-positive: 1 !important;
  flex-grow: 1 !important;
}

.flex-shrink-0 {
  -ms-flex-negative: 0 !important;
  flex-shrink: 0 !important;
}

.flex-shrink-1 {
  -ms-flex-negative: 1 !important;
  flex-shrink: 1 !important;
}

.justify-content-start {
  -ms-flex-pack: start !important;
  justify-content: flex-start !important;
}

.justify-content-end {
  -ms-flex-pack: end !important;
  justify-content: flex-end !important;
}

.justify-content-center {
  -ms-flex-pack: center !important;
  justify-content: center !important;
}

.justify-content-between {
  -ms-flex-pack: justify !important;
  justify-content: space-between !important;
}

.justify-content-around {
  -ms-flex-pack: distribute !important;
  justify-content: space-around !important;
}

.align-items-start {
  -ms-flex-align: start !important;
  align-items: flex-start !important;
}

.align-items-end {
  -ms-flex-align: end !important;
  align-items: flex-end !important;
}

.align-items-center {
  -ms-flex-align: center !important;
  align-items: center !important;
}

.align-items-baseline {
  -ms-flex-align: baseline !important;
  align-items: baseline !important;
}

.align-items-stretch {
  -ms-flex-align: stretch !important;
  align-items: stretch !important;
}

.align-content-start {
  -ms-flex-line-pack: start !important;
  align-content: flex-start !important;
}

.align-content-end {
  -ms-flex-line-pack: end !important;
  align-content: flex-end !important;
}

.align-content-center {
  -ms-flex-line-pack: center !important;
  align-content: center !important;
}

.align-content-between {
  -ms-flex-line-pack: justify !important;
  align-content: space-between !important;
}

.align-content-around {
  -ms-flex-line-pack: distribute !important;
  align-content: space-around !important;
}

.align-content-stretch {
  -ms-flex-line-pack: stretch !important;
  align-content: stretch !important;
}

.align-self-auto {
  -ms-flex-item-align: auto !important;
  align-self: auto !important;
}

.align-self-start {
  -ms-flex-item-align: start !important;
  align-self: flex-start !important;
}

.align-self-end {
  -ms-flex-item-align: end !important;
  align-self: flex-end !important;
}

.align-self-center {
  -ms-flex-item-align: center !important;
  align-self: center !important;
}

.align-self-baseline {
  -ms-flex-item-align: baseline !important;
  align-self: baseline !important;
}

.align-self-stretch {
  -ms-flex-item-align: stretch !important;
  align-self: stretch !important;
}

@media (min-width: 576px) {
  .flex-sm-row {
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-sm-column {
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-sm-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .flex-sm-fill {
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
  }
  .flex-sm-grow-0 {
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
  }
  .flex-sm-grow-1 {
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
  }
  .flex-sm-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
  }
  .flex-sm-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
  }
  .justify-content-sm-start {
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-sm-between {
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-sm-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-sm-start {
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-sm-end {
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-sm-center {
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-sm-baseline {
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-sm-stretch {
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-sm-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-sm-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-sm-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-sm-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-sm-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-sm-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-sm-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-sm-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-sm-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-sm-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-sm-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-sm-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

@media (min-width: 768px) {
  .flex-md-row {
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-md-column {
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-md-row-reverse {
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-md-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .flex-md-fill {
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
  }
  .flex-md-grow-0 {
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
  }
  .flex-md-grow-1 {
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
  }
  .flex-md-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
  }
  .flex-md-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
  }
  .justify-content-md-start {
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-md-end {
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-md-center {
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-md-between {
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-md-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-md-start {
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-md-end {
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-md-center {
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-md-baseline {
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-md-stretch {
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-md-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-md-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-md-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-md-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-md-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-md-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-md-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-md-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-md-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-md-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-md-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-md-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

@media (min-width: 992px) {
  .flex-lg-row {
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-lg-column {
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-lg-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .flex-lg-fill {
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
  }
  .flex-lg-grow-0 {
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
  }
  .flex-lg-grow-1 {
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
  }
  .flex-lg-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
  }
  .flex-lg-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
  }
  .justify-content-lg-start {
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-lg-between {
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-lg-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-lg-start {
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-lg-end {
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-lg-center {
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-lg-baseline {
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-lg-stretch {
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-lg-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-lg-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-lg-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-lg-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-lg-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-lg-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-lg-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-lg-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-lg-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-lg-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-lg-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-lg-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

@media (min-width: 1200px) {
  .flex-xl-row {
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-xl-column {
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-xl-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .flex-xl-fill {
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
  }
  .flex-xl-grow-0 {
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
  }
  .flex-xl-grow-1 {
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
  }
  .flex-xl-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
  }
  .flex-xl-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
  }
  .justify-content-xl-start {
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-xl-between {
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-xl-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-xl-start {
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-xl-end {
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-xl-center {
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-xl-baseline {
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-xl-stretch {
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-xl-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-xl-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-xl-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-xl-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-xl-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-xl-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-xl-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-xl-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-xl-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-xl-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-xl-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-xl-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

.float-left {
  float: left !important;
}

.float-right {
  float: right !important;
}

.float-none {
  float: none !important;
}

@media (min-width: 576px) {
  .float-sm-left {
    float: left !important;
  }
  .float-sm-right {
    float: right !important;
  }
  .float-sm-none {
    float: none !important;
  }
}

@media (min-width: 768px) {
  .float-md-left {
    float: left !important;
  }
  .float-md-right {
    float: right !important;
  }
  .float-md-none {
    float: none !important;
  }
}

@media (min-width: 992px) {
  .float-lg-left {
    float: left !important;
  }
  .float-lg-right {
    float: right !important;
  }
  .float-lg-none {
    float: none !important;
  }
}

@media (min-width: 1200px) {
  .float-xl-left {
    float: left !important;
  }
  .float-xl-right {
    float: right !important;
  }
  .float-xl-none {
    float: none !important;
  }
}

.overflow-auto {
  overflow: auto !important;
}

.overflow-hidden {
  overflow: hidden !important;
}

.position-static {
  position: static !important;
}

.position-relative {
  position: relative !important;
}

.position-absolute {
  position: absolute !important;
}

.position-fixed {
  position: fixed !important;
}

.position-sticky {
  position: -webkit-sticky !important;
  position: sticky !important;
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}

@supports ((position: -webkit-sticky) or (position: sticky)) {
  .sticky-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal;
}

.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

.shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.shadow-lg {
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.shadow-none {
  box-shadow: none !important;
}

.w-25 {
  width: 25% !important;
}

.w-50 {
  width: 50% !important;
}

.w-75 {
  width: 75% !important;
}

.w-100 {
  width: 100% !important;
}

.w-auto {
  width: auto !important;
}

.h-25 {
  height: 25% !important;
}

.h-50 {
  height: 50% !important;
}

.h-75 {
  height: 75% !important;
}

.h-100 {
  height: 100% !important;
}

.h-auto {
  height: auto !important;
}

.mw-100 {
  max-width: 100% !important;
}

.mh-100 {
  max-height: 100% !important;
}

.min-vw-100 {
  min-width: 100vw !important;
}

.min-vh-100 {
  min-height: 100vh !important;
}

.vw-100 {
  width: 100vw !important;
}

.vh-100 {
  height: 100vh !important;
}

.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  pointer-events: auto;
  content: "";
  background-color: rgba(0, 0, 0, 0);
}

.m-0 {
  margin: 0 !important;
}

.mt-0,
.my-0 {
  margin-top: 0 !important;
}

.mr-0,
.mx-0 {
  margin-right: 0 !important;
}

.mb-0,
.my-0 {
  margin-bottom: 0 !important;
}

.ml-0,
.mx-0 {
  margin-left: 0 !important;
}

.m-1 {
  margin: 0.25rem !important;
}

.mt-1,
.my-1 {
  margin-top: 0.25rem !important;
}

.mr-1,
.mx-1 {
  margin-right: 0.25rem !important;
}

.mb-1,
.my-1 {
  margin-bottom: 0.25rem !important;
}

.ml-1,
.mx-1 {
  margin-left: 0.25rem !important;
}

.m-2 {
  margin: 0.5rem !important;
}

.mt-2,
.my-2 {
  margin-top: 0.5rem !important;
}

.mr-2,
.mx-2 {
  margin-right: 0.5rem !important;
}

.mb-2,
.my-2 {
  margin-bottom: 0.5rem !important;
}

.ml-2,
.mx-2 {
  margin-left: 0.5rem !important;
}

.m-3 {
  margin: 1rem !important;
}

.mt-3,
.my-3 {
  margin-top: 1rem !important;
}

.mr-3,
.mx-3 {
  margin-right: 1rem !important;
}

.mb-3,
.my-3 {
  margin-bottom: 1rem !important;
}

.ml-3,
.mx-3 {
  margin-left: 1rem !important;
}

.m-4 {
  margin: 1.5rem !important;
}

.mt-4,
.my-4 {
  margin-top: 1.5rem !important;
}

.mr-4,
.mx-4 {
  margin-right: 1.5rem !important;
}

.mb-4,
.my-4 {
  margin-bottom: 1.5rem !important;
}

.ml-4,
.mx-4 {
  margin-left: 1.5rem !important;
}

.m-5 {
  margin: 3rem !important;
}

.mt-5,
.my-5 {
  margin-top: 3rem !important;
}

.mr-5,
.mx-5 {
  margin-right: 3rem !important;
}

.mb-5,
.my-5 {
  margin-bottom: 3rem !important;
}

.ml-5,
.mx-5 {
  margin-left: 3rem !important;
}

.p-0 {
  padding: 0 !important;
}

.pt-0,
.py-0 {
  padding-top: 0 !important;
}

.pr-0,
.px-0 {
  padding-right: 0 !important;
}

.pb-0,
.py-0 {
  padding-bottom: 0 !important;
}

.pl-0,
.px-0 {
  padding-left: 0 !important;
}

.p-1 {
  padding: 0.25rem !important;
}

.pt-1,
.py-1 {
  padding-top: 0.25rem !important;
}

.pr-1,
.px-1 {
  padding-right: 0.25rem !important;
}

.pb-1,
.py-1 {
  padding-bottom: 0.25rem !important;
}

.pl-1,
.px-1 {
  padding-left: 0.25rem !important;
}

.p-2 {
  padding: 0.5rem !important;
}

.pt-2,
.py-2 {
  padding-top: 0.5rem !important;
}

.pr-2,
.px-2 {
  padding-right: 0.5rem !important;
}

.pb-2,
.py-2 {
  padding-bottom: 0.5rem !important;
}

.pl-2,
.px-2 {
  padding-left: 0.5rem !important;
}

.p-3 {
  padding: 1rem !important;
}

.pt-3,
.py-3 {
  padding-top: 1rem !important;
}

.pr-3,
.px-3 {
  padding-right: 1rem !important;
}

.pb-3,
.py-3 {
  padding-bottom: 1rem !important;
}

.pl-3,
.px-3 {
  padding-left: 1rem !important;
}

.p-4 {
  padding: 1.5rem !important;
}

.pt-4,
.py-4 {
  padding-top: 1.5rem !important;
}

.pr-4,
.px-4 {
  padding-right: 1.5rem !important;
}

.pb-4,
.py-4 {
  padding-bottom: 1.5rem !important;
}

.pl-4,
.px-4 {
  padding-left: 1.5rem !important;
}

.p-5 {
  padding: 3rem !important;
}

.pt-5,
.py-5 {
  padding-top: 3rem !important;
}

.pr-5,
.px-5 {
  padding-right: 3rem !important;
}

.pb-5,
.py-5 {
  padding-bottom: 3rem !important;
}

.pl-5,
.px-5 {
  padding-left: 3rem !important;
}

.m-n1 {
  margin: -0.25rem !important;
}

.mt-n1,
.my-n1 {
  margin-top: -0.25rem !important;
}

.mr-n1,
.mx-n1 {
  margin-right: -0.25rem !important;
}

.mb-n1,
.my-n1 {
  margin-bottom: -0.25rem !important;
}

.ml-n1,
.mx-n1 {
  margin-left: -0.25rem !important;
}

.m-n2 {
  margin: -0.5rem !important;
}

.mt-n2,
.my-n2 {
  margin-top: -0.5rem !important;
}

.mr-n2,
.mx-n2 {
  margin-right: -0.5rem !important;
}

.mb-n2,
.my-n2 {
  margin-bottom: -0.5rem !important;
}

.ml-n2,
.mx-n2 {
  margin-left: -0.5rem !important;
}

.m-n3 {
  margin: -1rem !important;
}

.mt-n3,
.my-n3 {
  margin-top: -1rem !important;
}

.mr-n3,
.mx-n3 {
  margin-right: -1rem !important;
}

.mb-n3,
.my-n3 {
  margin-bottom: -1rem !important;
}

.ml-n3,
.mx-n3 {
  margin-left: -1rem !important;
}

.m-n4 {
  margin: -1.5rem !important;
}

.mt-n4,
.my-n4 {
  margin-top: -1.5rem !important;
}

.mr-n4,
.mx-n4 {
  margin-right: -1.5rem !important;
}

.mb-n4,
.my-n4 {
  margin-bottom: -1.5rem !important;
}

.ml-n4,
.mx-n4 {
  margin-left: -1.5rem !important;
}

.m-n5 {
  margin: -3rem !important;
}

.mt-n5,
.my-n5 {
  margin-top: -3rem !important;
}

.mr-n5,
.mx-n5 {
  margin-right: -3rem !important;
}

.mb-n5,
.my-n5 {
  margin-bottom: -3rem !important;
}

.ml-n5,
.mx-n5 {
  margin-left: -3rem !important;
}

.m-auto {
  margin: auto !important;
}

.mt-auto,
.my-auto {
  margin-top: auto !important;
}

.mr-auto,
.mx-auto {
  margin-right: auto !important;
}

.mb-auto,
.my-auto {
  margin-bottom: auto !important;
}

.ml-auto,
.mx-auto {
  margin-left: auto !important;
}

@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important;
  }
  .mt-sm-0,
  .my-sm-0 {
    margin-top: 0 !important;
  }
  .mr-sm-0,
  .mx-sm-0 {
    margin-right: 0 !important;
  }
  .mb-sm-0,
  .my-sm-0 {
    margin-bottom: 0 !important;
  }
  .ml-sm-0,
  .mx-sm-0 {
    margin-left: 0 !important;
  }
  .m-sm-1 {
    margin: 0.25rem !important;
  }
  .mt-sm-1,
  .my-sm-1 {
    margin-top: 0.25rem !important;
  }
  .mr-sm-1,
  .mx-sm-1 {
    margin-right: 0.25rem !important;
  }
  .mb-sm-1,
  .my-sm-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-sm-1,
  .mx-sm-1 {
    margin-left: 0.25rem !important;
  }
  .m-sm-2 {
    margin: 0.5rem !important;
  }
  .mt-sm-2,
  .my-sm-2 {
    margin-top: 0.5rem !important;
  }
  .mr-sm-2,
  .mx-sm-2 {
    margin-right: 0.5rem !important;
  }
  .mb-sm-2,
  .my-sm-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-sm-2,
  .mx-sm-2 {
    margin-left: 0.5rem !important;
  }
  .m-sm-3 {
    margin: 1rem !important;
  }
  .mt-sm-3,
  .my-sm-3 {
    margin-top: 1rem !important;
  }
  .mr-sm-3,
  .mx-sm-3 {
    margin-right: 1rem !important;
  }
  .mb-sm-3,
  .my-sm-3 {
    margin-bottom: 1rem !important;
  }
  .ml-sm-3,
  .mx-sm-3 {
    margin-left: 1rem !important;
  }
  .m-sm-4 {
    margin: 1.5rem !important;
  }
  .mt-sm-4,
  .my-sm-4 {
    margin-top: 1.5rem !important;
  }
  .mr-sm-4,
  .mx-sm-4 {
    margin-right: 1.5rem !important;
  }
  .mb-sm-4,
  .my-sm-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-sm-4,
  .mx-sm-4 {
    margin-left: 1.5rem !important;
  }
  .m-sm-5 {
    margin: 3rem !important;
  }
  .mt-sm-5,
  .my-sm-5 {
    margin-top: 3rem !important;
  }
  .mr-sm-5,
  .mx-sm-5 {
    margin-right: 3rem !important;
  }
  .mb-sm-5,
  .my-sm-5 {
    margin-bottom: 3rem !important;
  }
  .ml-sm-5,
  .mx-sm-5 {
    margin-left: 3rem !important;
  }
  .p-sm-0 {
    padding: 0 !important;
  }
  .pt-sm-0,
  .py-sm-0 {
    padding-top: 0 !important;
  }
  .pr-sm-0,
  .px-sm-0 {
    padding-right: 0 !important;
  }
  .pb-sm-0,
  .py-sm-0 {
    padding-bottom: 0 !important;
  }
  .pl-sm-0,
  .px-sm-0 {
    padding-left: 0 !important;
  }
  .p-sm-1 {
    padding: 0.25rem !important;
  }
  .pt-sm-1,
  .py-sm-1 {
    padding-top: 0.25rem !important;
  }
  .pr-sm-1,
  .px-sm-1 {
    padding-right: 0.25rem !important;
  }
  .pb-sm-1,
  .py-sm-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-sm-1,
  .px-sm-1 {
    padding-left: 0.25rem !important;
  }
  .p-sm-2 {
    padding: 0.5rem !important;
  }
  .pt-sm-2,
  .py-sm-2 {
    padding-top: 0.5rem !important;
  }
  .pr-sm-2,
  .px-sm-2 {
    padding-right: 0.5rem !important;
  }
  .pb-sm-2,
  .py-sm-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-sm-2,
  .px-sm-2 {
    padding-left: 0.5rem !important;
  }
  .p-sm-3 {
    padding: 1rem !important;
  }
  .pt-sm-3,
  .py-sm-3 {
    padding-top: 1rem !important;
  }
  .pr-sm-3,
  .px-sm-3 {
    padding-right: 1rem !important;
  }
  .pb-sm-3,
  .py-sm-3 {
    padding-bottom: 1rem !important;
  }
  .pl-sm-3,
  .px-sm-3 {
    padding-left: 1rem !important;
  }
  .p-sm-4 {
    padding: 1.5rem !important;
  }
  .pt-sm-4,
  .py-sm-4 {
    padding-top: 1.5rem !important;
  }
  .pr-sm-4,
  .px-sm-4 {
    padding-right: 1.5rem !important;
  }
  .pb-sm-4,
  .py-sm-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-sm-4,
  .px-sm-4 {
    padding-left: 1.5rem !important;
  }
  .p-sm-5 {
    padding: 3rem !important;
  }
  .pt-sm-5,
  .py-sm-5 {
    padding-top: 3rem !important;
  }
  .pr-sm-5,
  .px-sm-5 {
    padding-right: 3rem !important;
  }
  .pb-sm-5,
  .py-sm-5 {
    padding-bottom: 3rem !important;
  }
  .pl-sm-5,
  .px-sm-5 {
    padding-left: 3rem !important;
  }
  .m-sm-n1 {
    margin: -0.25rem !important;
  }
  .mt-sm-n1,
  .my-sm-n1 {
    margin-top: -0.25rem !important;
  }
  .mr-sm-n1,
  .mx-sm-n1 {
    margin-right: -0.25rem !important;
  }
  .mb-sm-n1,
  .my-sm-n1 {
    margin-bottom: -0.25rem !important;
  }
  .ml-sm-n1,
  .mx-sm-n1 {
    margin-left: -0.25rem !important;
  }
  .m-sm-n2 {
    margin: -0.5rem !important;
  }
  .mt-sm-n2,
  .my-sm-n2 {
    margin-top: -0.5rem !important;
  }
  .mr-sm-n2,
  .mx-sm-n2 {
    margin-right: -0.5rem !important;
  }
  .mb-sm-n2,
  .my-sm-n2 {
    margin-bottom: -0.5rem !important;
  }
  .ml-sm-n2,
  .mx-sm-n2 {
    margin-left: -0.5rem !important;
  }
  .m-sm-n3 {
    margin: -1rem !important;
  }
  .mt-sm-n3,
  .my-sm-n3 {
    margin-top: -1rem !important;
  }
  .mr-sm-n3,
  .mx-sm-n3 {
    margin-right: -1rem !important;
  }
  .mb-sm-n3,
  .my-sm-n3 {
    margin-bottom: -1rem !important;
  }
  .ml-sm-n3,
  .mx-sm-n3 {
    margin-left: -1rem !important;
  }
  .m-sm-n4 {
    margin: -1.5rem !important;
  }
  .mt-sm-n4,
  .my-sm-n4 {
    margin-top: -1.5rem !important;
  }
  .mr-sm-n4,
  .mx-sm-n4 {
    margin-right: -1.5rem !important;
  }
  .mb-sm-n4,
  .my-sm-n4 {
    margin-bottom: -1.5rem !important;
  }
  .ml-sm-n4,
  .mx-sm-n4 {
    margin-left: -1.5rem !important;
  }
  .m-sm-n5 {
    margin: -3rem !important;
  }
  .mt-sm-n5,
  .my-sm-n5 {
    margin-top: -3rem !important;
  }
  .mr-sm-n5,
  .mx-sm-n5 {
    margin-right: -3rem !important;
  }
  .mb-sm-n5,
  .my-sm-n5 {
    margin-bottom: -3rem !important;
  }
  .ml-sm-n5,
  .mx-sm-n5 {
    margin-left: -3rem !important;
  }
  .m-sm-auto {
    margin: auto !important;
  }
  .mt-sm-auto,
  .my-sm-auto {
    margin-top: auto !important;
  }
  .mr-sm-auto,
  .mx-sm-auto {
    margin-right: auto !important;
  }
  .mb-sm-auto,
  .my-sm-auto {
    margin-bottom: auto !important;
  }
  .ml-sm-auto,
  .mx-sm-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important;
  }
  .mt-md-0,
  .my-md-0 {
    margin-top: 0 !important;
  }
  .mr-md-0,
  .mx-md-0 {
    margin-right: 0 !important;
  }
  .mb-md-0,
  .my-md-0 {
    margin-bottom: 0 !important;
  }
  .ml-md-0,
  .mx-md-0 {
    margin-left: 0 !important;
  }
  .m-md-1 {
    margin: 0.25rem !important;
  }
  .mt-md-1,
  .my-md-1 {
    margin-top: 0.25rem !important;
  }
  .mr-md-1,
  .mx-md-1 {
    margin-right: 0.25rem !important;
  }
  .mb-md-1,
  .my-md-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-md-1,
  .mx-md-1 {
    margin-left: 0.25rem !important;
  }
  .m-md-2 {
    margin: 0.5rem !important;
  }
  .mt-md-2,
  .my-md-2 {
    margin-top: 0.5rem !important;
  }
  .mr-md-2,
  .mx-md-2 {
    margin-right: 0.5rem !important;
  }
  .mb-md-2,
  .my-md-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-md-2,
  .mx-md-2 {
    margin-left: 0.5rem !important;
  }
  .m-md-3 {
    margin: 1rem !important;
  }
  .mt-md-3,
  .my-md-3 {
    margin-top: 1rem !important;
  }
  .mr-md-3,
  .mx-md-3 {
    margin-right: 1rem !important;
  }
  .mb-md-3,
  .my-md-3 {
    margin-bottom: 1rem !important;
  }
  .ml-md-3,
  .mx-md-3 {
    margin-left: 1rem !important;
  }
  .m-md-4 {
    margin: 1.5rem !important;
  }
  .mt-md-4,
  .my-md-4 {
    margin-top: 1.5rem !important;
  }
  .mr-md-4,
  .mx-md-4 {
    margin-right: 1.5rem !important;
  }
  .mb-md-4,
  .my-md-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-md-4,
  .mx-md-4 {
    margin-left: 1.5rem !important;
  }
  .m-md-5 {
    margin: 3rem !important;
  }
  .mt-md-5,
  .my-md-5 {
    margin-top: 3rem !important;
  }
  .mr-md-5,
  .mx-md-5 {
    margin-right: 3rem !important;
  }
  .mb-md-5,
  .my-md-5 {
    margin-bottom: 3rem !important;
  }
  .ml-md-5,
  .mx-md-5 {
    margin-left: 3rem !important;
  }
  .p-md-0 {
    padding: 0 !important;
  }
  .pt-md-0,
  .py-md-0 {
    padding-top: 0 !important;
  }
  .pr-md-0,
  .px-md-0 {
    padding-right: 0 !important;
  }
  .pb-md-0,
  .py-md-0 {
    padding-bottom: 0 !important;
  }
  .pl-md-0,
  .px-md-0 {
    padding-left: 0 !important;
  }
  .p-md-1 {
    padding: 0.25rem !important;
  }
  .pt-md-1,
  .py-md-1 {
    padding-top: 0.25rem !important;
  }
  .pr-md-1,
  .px-md-1 {
    padding-right: 0.25rem !important;
  }
  .pb-md-1,
  .py-md-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-md-1,
  .px-md-1 {
    padding-left: 0.25rem !important;
  }
  .p-md-2 {
    padding: 0.5rem !important;
  }
  .pt-md-2,
  .py-md-2 {
    padding-top: 0.5rem !important;
  }
  .pr-md-2,
  .px-md-2 {
    padding-right: 0.5rem !important;
  }
  .pb-md-2,
  .py-md-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-md-2,
  .px-md-2 {
    padding-left: 0.5rem !important;
  }
  .p-md-3 {
    padding: 1rem !important;
  }
  .pt-md-3,
  .py-md-3 {
    padding-top: 1rem !important;
  }
  .pr-md-3,
  .px-md-3 {
    padding-right: 1rem !important;
  }
  .pb-md-3,
  .py-md-3 {
    padding-bottom: 1rem !important;
  }
  .pl-md-3,
  .px-md-3 {
    padding-left: 1rem !important;
  }
  .p-md-4 {
    padding: 1.5rem !important;
  }
  .pt-md-4,
  .py-md-4 {
    padding-top: 1.5rem !important;
  }
  .pr-md-4,
  .px-md-4 {
    padding-right: 1.5rem !important;
  }
  .pb-md-4,
  .py-md-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-md-4,
  .px-md-4 {
    padding-left: 1.5rem !important;
  }
  .p-md-5 {
    padding: 3rem !important;
  }
  .pt-md-5,
  .py-md-5 {
    padding-top: 3rem !important;
  }
  .pr-md-5,
  .px-md-5 {
    padding-right: 3rem !important;
  }
  .pb-md-5,
  .py-md-5 {
    padding-bottom: 3rem !important;
  }
  .pl-md-5,
  .px-md-5 {
    padding-left: 3rem !important;
  }
  .m-md-n1 {
    margin: -0.25rem !important;
  }
  .mt-md-n1,
  .my-md-n1 {
    margin-top: -0.25rem !important;
  }
  .mr-md-n1,
  .mx-md-n1 {
    margin-right: -0.25rem !important;
  }
  .mb-md-n1,
  .my-md-n1 {
    margin-bottom: -0.25rem !important;
  }
  .ml-md-n1,
  .mx-md-n1 {
    margin-left: -0.25rem !important;
  }
  .m-md-n2 {
    margin: -0.5rem !important;
  }
  .mt-md-n2,
  .my-md-n2 {
    margin-top: -0.5rem !important;
  }
  .mr-md-n2,
  .mx-md-n2 {
    margin-right: -0.5rem !important;
  }
  .mb-md-n2,
  .my-md-n2 {
    margin-bottom: -0.5rem !important;
  }
  .ml-md-n2,
  .mx-md-n2 {
    margin-left: -0.5rem !important;
  }
  .m-md-n3 {
    margin: -1rem !important;
  }
  .mt-md-n3,
  .my-md-n3 {
    margin-top: -1rem !important;
  }
  .mr-md-n3,
  .mx-md-n3 {
    margin-right: -1rem !important;
  }
  .mb-md-n3,
  .my-md-n3 {
    margin-bottom: -1rem !important;
  }
  .ml-md-n3,
  .mx-md-n3 {
    margin-left: -1rem !important;
  }
  .m-md-n4 {
    margin: -1.5rem !important;
  }
  .mt-md-n4,
  .my-md-n4 {
    margin-top: -1.5rem !important;
  }
  .mr-md-n4,
  .mx-md-n4 {
    margin-right: -1.5rem !important;
  }
  .mb-md-n4,
  .my-md-n4 {
    margin-bottom: -1.5rem !important;
  }
  .ml-md-n4,
  .mx-md-n4 {
    margin-left: -1.5rem !important;
  }
  .m-md-n5 {
    margin: -3rem !important;
  }
  .mt-md-n5,
  .my-md-n5 {
    margin-top: -3rem !important;
  }
  .mr-md-n5,
  .mx-md-n5 {
    margin-right: -3rem !important;
  }
  .mb-md-n5,
  .my-md-n5 {
    margin-bottom: -3rem !important;
  }
  .ml-md-n5,
  .mx-md-n5 {
    margin-left: -3rem !important;
  }
  .m-md-auto {
    margin: auto !important;
  }
  .mt-md-auto,
  .my-md-auto {
    margin-top: auto !important;
  }
  .mr-md-auto,
  .mx-md-auto {
    margin-right: auto !important;
  }
  .mb-md-auto,
  .my-md-auto {
    margin-bottom: auto !important;
  }
  .ml-md-auto,
  .mx-md-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important;
  }
  .mt-lg-0,
  .my-lg-0 {
    margin-top: 0 !important;
  }
  .mr-lg-0,
  .mx-lg-0 {
    margin-right: 0 !important;
  }
  .mb-lg-0,
  .my-lg-0 {
    margin-bottom: 0 !important;
  }
  .ml-lg-0,
  .mx-lg-0 {
    margin-left: 0 !important;
  }
  .m-lg-1 {
    margin: 0.25rem !important;
  }
  .mt-lg-1,
  .my-lg-1 {
    margin-top: 0.25rem !important;
  }
  .mr-lg-1,
  .mx-lg-1 {
    margin-right: 0.25rem !important;
  }
  .mb-lg-1,
  .my-lg-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-lg-1,
  .mx-lg-1 {
    margin-left: 0.25rem !important;
  }
  .m-lg-2 {
    margin: 0.5rem !important;
  }
  .mt-lg-2,
  .my-lg-2 {
    margin-top: 0.5rem !important;
  }
  .mr-lg-2,
  .mx-lg-2 {
    margin-right: 0.5rem !important;
  }
  .mb-lg-2,
  .my-lg-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-lg-2,
  .mx-lg-2 {
    margin-left: 0.5rem !important;
  }
  .m-lg-3 {
    margin: 1rem !important;
  }
  .mt-lg-3,
  .my-lg-3 {
    margin-top: 1rem !important;
  }
  .mr-lg-3,
  .mx-lg-3 {
    margin-right: 1rem !important;
  }
  .mb-lg-3,
  .my-lg-3 {
    margin-bottom: 1rem !important;
  }
  .ml-lg-3,
  .mx-lg-3 {
    margin-left: 1rem !important;
  }
  .m-lg-4 {
    margin: 1.5rem !important;
  }
  .mt-lg-4,
  .my-lg-4 {
    margin-top: 1.5rem !important;
  }
  .mr-lg-4,
  .mx-lg-4 {
    margin-right: 1.5rem !important;
  }
  .mb-lg-4,
  .my-lg-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-lg-4,
  .mx-lg-4 {
    margin-left: 1.5rem !important;
  }
  .m-lg-5 {
    margin: 3rem !important;
  }
  .mt-lg-5,
  .my-lg-5 {
    margin-top: 3rem !important;
  }
  .mr-lg-5,
  .mx-lg-5 {
    margin-right: 3rem !important;
  }
  .mb-lg-5,
  .my-lg-5 {
    margin-bottom: 3rem !important;
  }
  .ml-lg-5,
  .mx-lg-5 {
    margin-left: 3rem !important;
  }
  .p-lg-0 {
    padding: 0 !important;
  }
  .pt-lg-0,
  .py-lg-0 {
    padding-top: 0 !important;
  }
  .pr-lg-0,
  .px-lg-0 {
    padding-right: 0 !important;
  }
  .pb-lg-0,
  .py-lg-0 {
    padding-bottom: 0 !important;
  }
  .pl-lg-0,
  .px-lg-0 {
    padding-left: 0 !important;
  }
  .p-lg-1 {
    padding: 0.25rem !important;
  }
  .pt-lg-1,
  .py-lg-1 {
    padding-top: 0.25rem !important;
  }
  .pr-lg-1,
  .px-lg-1 {
    padding-right: 0.25rem !important;
  }
  .pb-lg-1,
  .py-lg-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-lg-1,
  .px-lg-1 {
    padding-left: 0.25rem !important;
  }
  .p-lg-2 {
    padding: 0.5rem !important;
  }
  .pt-lg-2,
  .py-lg-2 {
    padding-top: 0.5rem !important;
  }
  .pr-lg-2,
  .px-lg-2 {
    padding-right: 0.5rem !important;
  }
  .pb-lg-2,
  .py-lg-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-lg-2,
  .px-lg-2 {
    padding-left: 0.5rem !important;
  }
  .p-lg-3 {
    padding: 1rem !important;
  }
  .pt-lg-3,
  .py-lg-3 {
    padding-top: 1rem !important;
  }
  .pr-lg-3,
  .px-lg-3 {
    padding-right: 1rem !important;
  }
  .pb-lg-3,
  .py-lg-3 {
    padding-bottom: 1rem !important;
  }
  .pl-lg-3,
  .px-lg-3 {
    padding-left: 1rem !important;
  }
  .p-lg-4 {
    padding: 1.5rem !important;
  }
  .pt-lg-4,
  .py-lg-4 {
    padding-top: 1.5rem !important;
  }
  .pr-lg-4,
  .px-lg-4 {
    padding-right: 1.5rem !important;
  }
  .pb-lg-4,
  .py-lg-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-lg-4,
  .px-lg-4 {
    padding-left: 1.5rem !important;
  }
  .p-lg-5 {
    padding: 3rem !important;
  }
  .pt-lg-5,
  .py-lg-5 {
    padding-top: 3rem !important;
  }
  .pr-lg-5,
  .px-lg-5 {
    padding-right: 3rem !important;
  }
  .pb-lg-5,
  .py-lg-5 {
    padding-bottom: 3rem !important;
  }
  .pl-lg-5,
  .px-lg-5 {
    padding-left: 3rem !important;
  }
  .m-lg-n1 {
    margin: -0.25rem !important;
  }
  .mt-lg-n1,
  .my-lg-n1 {
    margin-top: -0.25rem !important;
  }
  .mr-lg-n1,
  .mx-lg-n1 {
    margin-right: -0.25rem !important;
  }
  .mb-lg-n1,
  .my-lg-n1 {
    margin-bottom: -0.25rem !important;
  }
  .ml-lg-n1,
  .mx-lg-n1 {
    margin-left: -0.25rem !important;
  }
  .m-lg-n2 {
    margin: -0.5rem !important;
  }
  .mt-lg-n2,
  .my-lg-n2 {
    margin-top: -0.5rem !important;
  }
  .mr-lg-n2,
  .mx-lg-n2 {
    margin-right: -0.5rem !important;
  }
  .mb-lg-n2,
  .my-lg-n2 {
    margin-bottom: -0.5rem !important;
  }
  .ml-lg-n2,
  .mx-lg-n2 {
    margin-left: -0.5rem !important;
  }
  .m-lg-n3 {
    margin: -1rem !important;
  }
  .mt-lg-n3,
  .my-lg-n3 {
    margin-top: -1rem !important;
  }
  .mr-lg-n3,
  .mx-lg-n3 {
    margin-right: -1rem !important;
  }
  .mb-lg-n3,
  .my-lg-n3 {
    margin-bottom: -1rem !important;
  }
  .ml-lg-n3,
  .mx-lg-n3 {
    margin-left: -1rem !important;
  }
  .m-lg-n4 {
    margin: -1.5rem !important;
  }
  .mt-lg-n4,
  .my-lg-n4 {
    margin-top: -1.5rem !important;
  }
  .mr-lg-n4,
  .mx-lg-n4 {
    margin-right: -1.5rem !important;
  }
  .mb-lg-n4,
  .my-lg-n4 {
    margin-bottom: -1.5rem !important;
  }
  .ml-lg-n4,
  .mx-lg-n4 {
    margin-left: -1.5rem !important;
  }
  .m-lg-n5 {
    margin: -3rem !important;
  }
  .mt-lg-n5,
  .my-lg-n5 {
    margin-top: -3rem !important;
  }
  .mr-lg-n5,
  .mx-lg-n5 {
    margin-right: -3rem !important;
  }
  .mb-lg-n5,
  .my-lg-n5 {
    margin-bottom: -3rem !important;
  }
  .ml-lg-n5,
  .mx-lg-n5 {
    margin-left: -3rem !important;
  }
  .m-lg-auto {
    margin: auto !important;
  }
  .mt-lg-auto,
  .my-lg-auto {
    margin-top: auto !important;
  }
  .mr-lg-auto,
  .mx-lg-auto {
    margin-right: auto !important;
  }
  .mb-lg-auto,
  .my-lg-auto {
    margin-bottom: auto !important;
  }
  .ml-lg-auto,
  .mx-lg-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 1200px) {
  .m-xl-0 {
    margin: 0 !important;
  }
  .mt-xl-0,
  .my-xl-0 {
    margin-top: 0 !important;
  }
  .mr-xl-0,
  .mx-xl-0 {
    margin-right: 0 !important;
  }
  .mb-xl-0,
  .my-xl-0 {
    margin-bottom: 0 !important;
  }
  .ml-xl-0,
  .mx-xl-0 {
    margin-left: 0 !important;
  }
  .m-xl-1 {
    margin: 0.25rem !important;
  }
  .mt-xl-1,
  .my-xl-1 {
    margin-top: 0.25rem !important;
  }
  .mr-xl-1,
  .mx-xl-1 {
    margin-right: 0.25rem !important;
  }
  .mb-xl-1,
  .my-xl-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-xl-1,
  .mx-xl-1 {
    margin-left: 0.25rem !important;
  }
  .m-xl-2 {
    margin: 0.5rem !important;
  }
  .mt-xl-2,
  .my-xl-2 {
    margin-top: 0.5rem !important;
  }
  .mr-xl-2,
  .mx-xl-2 {
    margin-right: 0.5rem !important;
  }
  .mb-xl-2,
  .my-xl-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-xl-2,
  .mx-xl-2 {
    margin-left: 0.5rem !important;
  }
  .m-xl-3 {
    margin: 1rem !important;
  }
  .mt-xl-3,
  .my-xl-3 {
    margin-top: 1rem !important;
  }
  .mr-xl-3,
  .mx-xl-3 {
    margin-right: 1rem !important;
  }
  .mb-xl-3,
  .my-xl-3 {
    margin-bottom: 1rem !important;
  }
  .ml-xl-3,
  .mx-xl-3 {
    margin-left: 1rem !important;
  }
  .m-xl-4 {
    margin: 1.5rem !important;
  }
  .mt-xl-4,
  .my-xl-4 {
    margin-top: 1.5rem !important;
  }
  .mr-xl-4,
  .mx-xl-4 {
    margin-right: 1.5rem !important;
  }
  .mb-xl-4,
  .my-xl-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-xl-4,
  .mx-xl-4 {
    margin-left: 1.5rem !important;
  }
  .m-xl-5 {
    margin: 3rem !important;
  }
  .mt-xl-5,
  .my-xl-5 {
    margin-top: 3rem !important;
  }
  .mr-xl-5,
  .mx-xl-5 {
    margin-right: 3rem !important;
  }
  .mb-xl-5,
  .my-xl-5 {
    margin-bottom: 3rem !important;
  }
  .ml-xl-5,
  .mx-xl-5 {
    margin-left: 3rem !important;
  }
  .p-xl-0 {
    padding: 0 !important;
  }
  .pt-xl-0,
  .py-xl-0 {
    padding-top: 0 !important;
  }
  .pr-xl-0,
  .px-xl-0 {
    padding-right: 0 !important;
  }
  .pb-xl-0,
  .py-xl-0 {
    padding-bottom: 0 !important;
  }
  .pl-xl-0,
  .px-xl-0 {
    padding-left: 0 !important;
  }
  .p-xl-1 {
    padding: 0.25rem !important;
  }
  .pt-xl-1,
  .py-xl-1 {
    padding-top: 0.25rem !important;
  }
  .pr-xl-1,
  .px-xl-1 {
    padding-right: 0.25rem !important;
  }
  .pb-xl-1,
  .py-xl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-xl-1,
  .px-xl-1 {
    padding-left: 0.25rem !important;
  }
  .p-xl-2 {
    padding: 0.5rem !important;
  }
  .pt-xl-2,
  .py-xl-2 {
    padding-top: 0.5rem !important;
  }
  .pr-xl-2,
  .px-xl-2 {
    padding-right: 0.5rem !important;
  }
  .pb-xl-2,
  .py-xl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-xl-2,
  .px-xl-2 {
    padding-left: 0.5rem !important;
  }
  .p-xl-3 {
    padding: 1rem !important;
  }
  .pt-xl-3,
  .py-xl-3 {
    padding-top: 1rem !important;
  }
  .pr-xl-3,
  .px-xl-3 {
    padding-right: 1rem !important;
  }
  .pb-xl-3,
  .py-xl-3 {
    padding-bottom: 1rem !important;
  }
  .pl-xl-3,
  .px-xl-3 {
    padding-left: 1rem !important;
  }
  .p-xl-4 {
    padding: 1.5rem !important;
  }
  .pt-xl-4,
  .py-xl-4 {
    padding-top: 1.5rem !important;
  }
  .pr-xl-4,
  .px-xl-4 {
    padding-right: 1.5rem !important;
  }
  .pb-xl-4,
  .py-xl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-xl-4,
  .px-xl-4 {
    padding-left: 1.5rem !important;
  }
  .p-xl-5 {
    padding: 3rem !important;
  }
  .pt-xl-5,
  .py-xl-5 {
    padding-top: 3rem !important;
  }
  .pr-xl-5,
  .px-xl-5 {
    padding-right: 3rem !important;
  }
  .pb-xl-5,
  .py-xl-5 {
    padding-bottom: 3rem !important;
  }
  .pl-xl-5,
  .px-xl-5 {
    padding-left: 3rem !important;
  }
  .m-xl-n1 {
    margin: -0.25rem !important;
  }
  .mt-xl-n1,
  .my-xl-n1 {
    margin-top: -0.25rem !important;
  }
  .mr-xl-n1,
  .mx-xl-n1 {
    margin-right: -0.25rem !important;
  }
  .mb-xl-n1,
  .my-xl-n1 {
    margin-bottom: -0.25rem !important;
  }
  .ml-xl-n1,
  .mx-xl-n1 {
    margin-left: -0.25rem !important;
  }
  .m-xl-n2 {
    margin: -0.5rem !important;
  }
  .mt-xl-n2,
  .my-xl-n2 {
    margin-top: -0.5rem !important;
  }
  .mr-xl-n2,
  .mx-xl-n2 {
    margin-right: -0.5rem !important;
  }
  .mb-xl-n2,
  .my-xl-n2 {
    margin-bottom: -0.5rem !important;
  }
  .ml-xl-n2,
  .mx-xl-n2 {
    margin-left: -0.5rem !important;
  }
  .m-xl-n3 {
    margin: -1rem !important;
  }
  .mt-xl-n3,
  .my-xl-n3 {
    margin-top: -1rem !important;
  }
  .mr-xl-n3,
  .mx-xl-n3 {
    margin-right: -1rem !important;
  }
  .mb-xl-n3,
  .my-xl-n3 {
    margin-bottom: -1rem !important;
  }
  .ml-xl-n3,
  .mx-xl-n3 {
    margin-left: -1rem !important;
  }
  .m-xl-n4 {
    margin: -1.5rem !important;
  }
  .mt-xl-n4,
  .my-xl-n4 {
    margin-top: -1.5rem !important;
  }
  .mr-xl-n4,
  .mx-xl-n4 {
    margin-right: -1.5rem !important;
  }
  .mb-xl-n4,
  .my-xl-n4 {
    margin-bottom: -1.5rem !important;
  }
  .ml-xl-n4,
  .mx-xl-n4 {
    margin-left: -1.5rem !important;
  }
  .m-xl-n5 {
    margin: -3rem !important;
  }
  .mt-xl-n5,
  .my-xl-n5 {
    margin-top: -3rem !important;
  }
  .mr-xl-n5,
  .mx-xl-n5 {
    margin-right: -3rem !important;
  }
  .mb-xl-n5,
  .my-xl-n5 {
    margin-bottom: -3rem !important;
  }
  .ml-xl-n5,
  .mx-xl-n5 {
    margin-left: -3rem !important;
  }
  .m-xl-auto {
    margin: auto !important;
  }
  .mt-xl-auto,
  .my-xl-auto {
    margin-top: auto !important;
  }
  .mr-xl-auto,
  .mx-xl-auto {
    margin-right: auto !important;
  }
  .mb-xl-auto,
  .my-xl-auto {
    margin-bottom: auto !important;
  }
  .ml-xl-auto,
  .mx-xl-auto {
    margin-left: auto !important;
  }
}

.text-monospace {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
}

.text-justify {
  text-align: justify !important;
}

.text-wrap {
  white-space: normal !important;
}

.text-nowrap {
  white-space: nowrap !important;
}

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.text-left {
  text-align: left !important;
}

.text-right {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important;
  }
  .text-sm-right {
    text-align: right !important;
  }
  .text-sm-center {
    text-align: center !important;
  }
}

@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important;
  }
  .text-md-right {
    text-align: right !important;
  }
  .text-md-center {
    text-align: center !important;
  }
}

@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important;
  }
  .text-lg-right {
    text-align: right !important;
  }
  .text-lg-center {
    text-align: center !important;
  }
}

@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important;
  }
  .text-xl-right {
    text-align: right !important;
  }
  .text-xl-center {
    text-align: center !important;
  }
}

.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.font-weight-light {
  font-weight: 300 !important;
}

.font-weight-lighter {
  font-weight: lighter !important;
}

.font-weight-normal {
  font-weight: 400 !important;
}

.font-weight-bold {
  font-weight: 700 !important;
}

.font-weight-bolder {
  font-weight: bolder !important;
}

.font-italic {
  font-style: italic !important;
}

.text-white {
  color: #fff !important;
}

.text-primary {
  color: #007bff !important;
}

a.text-primary:hover, a.text-primary:focus {
  color: #0056b3 !important;
}

.text-secondary {
  color: #6c757d !important;
}

a.text-secondary:hover, a.text-secondary:focus {
  color: #494f54 !important;
}

.text-success {
  color: #28a745 !important;
}

a.text-success:hover, a.text-success:focus {
  color: #19692c !important;
}

.text-info {
  color: #17a2b8 !important;
}

a.text-info:hover, a.text-info:focus {
  color: #0f6674 !important;
}

.text-warning {
  color: #ffc107 !important;
}

a.text-warning:hover, a.text-warning:focus {
  color: #ba8b00 !important;
}

.text-danger {
  color: #dc3545 !important;
}

a.text-danger:hover, a.text-danger:focus {
  color: #a71d2a !important;
}

.text-light {
  color: #f8f9fa !important;
}

a.text-light:hover, a.text-light:focus {
  color: #cbd3da !important;
}

.text-dark {
  color: #343a40 !important;
}

a.text-dark:hover, a.text-dark:focus {
  color: #121416 !important;
}

.text-body {
  color: #212529 !important;
}

.text-muted {
  color: #6c757d !important;
}

.text-black-50 {
  color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
  color: rgba(255, 255, 255, 0.5) !important;
}

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.text-decoration-none {
  text-decoration: none !important;
}

.text-break {
  word-break: break-word !important;
  overflow-wrap: break-word !important;
}

.text-reset {
  color: inherit !important;
}

.visible {
  visibility: visible !important;
}

.invisible {
  visibility: hidden !important;
}

@media print {
  *,
  *::before,
  *::after {
    text-shadow: none !important;
    box-shadow: none !important;
  }
  a:not(.btn) {
    text-decoration: underline;
  }
  abbr[title]::after {
    content: " (" attr(title) ")";
  }
  pre {
    white-space: pre-wrap !important;
  }
  pre,
  blockquote {
    border: 1px solid #adb5bd;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  @page {
    size: a3;
  }
  body {
    min-width: 992px !important;
  }
  .container {
    min-width: 992px !important;
  }
  .navbar {
    display: none;
  }
  .badge {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #dee2e6 !important;
  }
  .table-dark {
    color: inherit;
  }
  .table-dark th,
  .table-dark td,
  .table-dark thead th,
  .table-dark tbody + tbody {
    border-color: #dee2e6;
  }
  .table .thead-dark th {
    color: inherit;
    border-color: #dee2e6;
  }
}

#mainNav .menu-item a {
  text-transform: uppercase;

}
/*# sourceMappingURL=bootstrap.css.map */
</style>

<header id="top-background">

<nav id="mainNav" class="navbar navbar-expand-lg navbar-light justify-content-between container">

   <a class="navbar-brand"  href="<?= home_url(); ?>"><img alt="Logo Principal Apras Uniformes" width="140" height="auto" src="<?= wp_get_attachment_url(get_theme_mod('custom_logo')); ?>" class="img-logo"/> </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse" id="navbar" >
<?php wp_nav_menu( array(

'menu' => 'primary',
'theme_location' => 'primary', 
'menu_class' => 'navbar-nav mr-auto',
'container_class' => ''
) ); ?>

</div>

</nav>

</header>

<div id="wrapper">
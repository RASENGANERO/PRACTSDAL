(()=>{var e={4530:(e,t)=>{var s;!function(){"use strict";var r={}.hasOwnProperty;function a(){for(var e=[],t=0;t<arguments.length;t++){var s=arguments[t];if(s){var n=typeof s;if("string"===n||"number"===n)e.push(s);else if(Array.isArray(s)){if(s.length){var l=a.apply(null,s);l&&e.push(l)}}else if("object"===n){if(s.toString!==Object.prototype.toString&&!s.toString.toString().includes("[native code]")){e.push(s.toString());continue}for(var o in s)r.call(s,o)&&s[o]&&e.push(o)}}}return e.join(" ")}e.exports?(a.default=a,e.exports=a):void 0===(s=function(){return a}.apply(t,[]))||(e.exports=s)}()}},t={};function s(r){var a=t[r];if(void 0!==a)return a.exports;var n=t[r]={exports:{}};return e[r](n,n.exports,s),n.exports}s.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return s.d(t,{a:t}),t},s.d=(e,t)=>{for(var r in t)s.o(t,r)&&!s.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},s.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{"use strict";const e=window.React,t=window.wp.components,r=window.wp.data,a=window.wp.domReady;var n=s.n(a);const l=window.wp.element,o=window.yoast.uiLibrary,i=window.lodash,c=window.yoast.reduxJsToolkit,m=window.wp.url,d="linkParams",p=(0,c.createSlice)({name:d,initialState:{},reducers:{setLinkParams:(e,{payload:t})=>t}}),u=p.getInitialState,y={selectLinkParam:(e,t,s={})=>(0,i.get)(e,`${d}.${t}`,s),selectLinkParams:e=>(0,i.get)(e,d,{})};y.selectLink=(0,c.createSelector)([y.selectLinkParams,(e,t)=>t,(e,t,s={})=>s],((e,t,s)=>(0,m.addQueryArgs)(t,{...e,...s})));const g=p.actions,f=p.reducer,w=(0,c.createSlice)({name:"notifications",initialState:{},reducers:{addNotification:{reducer:(e,{payload:t})=>{e[t.id]={id:t.id,variant:t.variant,size:t.size,title:t.title,description:t.description}},prepare:({id:e,variant:t="info",size:s="default",title:r,description:a})=>({payload:{id:e||(0,c.nanoid)(),variant:t,size:s,title:r||"",description:a}})},removeNotification:(e,{payload:t})=>(0,i.omit)(e,t)}}),h=(w.getInitialState,w.actions,w.reducer,"pluginUrl"),E=(0,c.createSlice)({name:h,initialState:"",reducers:{setPluginUrl:(e,{payload:t})=>t}}),v=(E.getInitialState,{selectPluginUrl:e=>(0,i.get)(e,h,"")});v.selectImageLink=(0,c.createSelector)([v.selectPluginUrl,(e,t,s="images")=>s,(e,t)=>t],((e,t,s)=>[(0,i.trimEnd)(e,"/"),(0,i.trim)(t,"/"),(0,i.trimStart)(s,"/")].join("/"))),E.actions,E.reducer,window.wp.apiFetch;const b="loading",x="showPlay",_="askPermission",k="isPlaying",N="wistiaEmbedPermission",S=(0,c.createSlice)({name:N,initialState:{value:!1,status:"idle",error:{}},reducers:{setWistiaEmbedPermissionValue:(e,{payload:t})=>{e.value=Boolean(t)}},extraReducers:e=>{e.addCase(`${N}/request`,(e=>{e.status=b})),e.addCase(`${N}/success`,((e,{payload:t})=>{e.status="success",e.value=Boolean(t&&t.value)})),e.addCase(`${N}/error`,((e,{payload:t})=>{e.status="error",e.value=Boolean(t&&t.value),e.error={code:(0,i.get)(t,"error.code",500),message:(0,i.get)(t,"error.message","Unknown")}}))}});S.getInitialState,S.actions,S.reducer;const P=e.forwardRef((function(t,s){return e.createElement("svg",Object.assign({xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24",strokeWidth:2,stroke:"currentColor","aria-hidden":"true",ref:s},t),e.createElement("path",{strokeLinecap:"round",strokeLinejoin:"round",d:"M17 8l4 4m0 0l-4 4m4-4H3"}))})),L=window.wp.i18n;var R=s(4530),O=s.n(R);const q=window.yoast.propTypes;var $=s.n(q);const I=({link:t})=>{const s=(0,l.useMemo)((()=>(0,l.createInterpolateElement)((0,L.sprintf)(/* translators: %1$s expands to "Yoast SEO" academy, which is a clickable link. */
(0,L.__)("Want to learn SEO from Team Yoast? Check out our %1$s!","wordpress-seo"),"<link/>"),{link:(0,e.createElement)("a",{href:t,target:"_blank",rel:"noopener"},"Yoast SEO academy")})),[]);return(0,e.createElement)(o.Paper,{as:"div",className:"yst-p-6 yst-space-y-3"},(0,e.createElement)(o.Title,{as:"h2",size:"4",className:"yst-text-base yst-text-primary-500"},(0,L.__)("Learn SEO","wordpress-seo")),(0,e.createElement)("p",null,s,(0,e.createElement)("br",null),(0,L.__)("We have both free and premium online courses to learn everything you need to know about SEO.","wordpress-seo")),(0,e.createElement)(o.Link,{href:t,className:"yst-block",target:"_blank",rel:"noopener"},(0,L.sprintf)(/* translators: %1$s expands to "Yoast SEO academy". */
(0,L.__)("Check out %1$s","wordpress-seo"),"Yoast SEO academy")))};I.propTypes={link:$().string.isRequired};const C=e.forwardRef((function(t,s){return e.createElement("svg",Object.assign({xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24",strokeWidth:2,stroke:"currentColor","aria-hidden":"true",ref:s},t),e.createElement("path",{strokeLinecap:"round",strokeLinejoin:"round",d:"M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"}))})),j=e.forwardRef((function(t,s){return e.createElement("svg",Object.assign({xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 20 20",fill:"currentColor","aria-hidden":"true",ref:s},t),e.createElement("path",{fillRule:"evenodd",d:"M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z",clipRule:"evenodd"}))})),T=({learnMoreLink:t,thumbnail:s,wistiaEmbedPermission:r,upsellLink:a,isProductCopy:n,title:i,upsellLabel:c,newToText:m,bundleNote:d})=>{const{onClose:p,initialFocus:u}=(0,o.useModalContext)(),y={a:(0,e.createElement)(F,{href:t,className:"yst-inline-flex yst-items-center yst-gap-1 yst-no-underline yst-font-medium",variant:"primary"}),ArrowNarrowRightIcon:(0,e.createElement)(j,{className:"yst-w-4 yst-h-4 rtl:yst-rotate-180"})};return(0,e.createElement)("div",{className:"yst-flex yst-flex-col yst-items-center yst-p-10"},(0,e.createElement)("div",{className:"yst-relative yst-w-full"},(0,e.createElement)(me,{videoId:"vmrahpfjxp",thumbnail:s,wistiaEmbedPermission:r}),(0,e.createElement)(o.Badge,{className:"yst-absolute yst-top-0 yst-right-2 yst-mt-2 yst-ml-2",variant:"info"},"Beta")),(0,e.createElement)("div",{className:"yst-mt-6 yst-text-xs yst-font-medium"},(0,e.createElement)("span",{className:"yst-introduction-modal-uppercase"},m)),(0,e.createElement)("div",{className:"yst-mt-4 yst-mx-1.5 yst-text-center"},(0,e.createElement)("h3",{className:"yst-text-slate-900 yst-text-lg yst-font-medium"},i),(0,e.createElement)("div",{className:"yst-mt-2 yst-text-slate-600 yst-text-sm"},n?(0,l.createInterpolateElement)((0,L.sprintf)(/* translators: %1$s and %2$s are anchor tags; %3$s is the arrow icon. */
(0,L.__)("Let AI do some of the thinking for you and help you save time. Get high-quality suggestions for product titles and meta descriptions to make your content rank high and look good on social media. %1$sLearn more%2$s%3$s","wordpress-seo"),"<a>","<ArrowNarrowRightIcon />","</a>"),y):(0,l.createInterpolateElement)((0,L.sprintf)(/* translators: %1$s and %2$s are anchor tags; %3$s is the arrow icon. */
(0,L.__)("Let AI do some of the thinking for you and help you save time. Get high-quality suggestions for titles and meta descriptions to make your content rank high and look good on social media. %1$sLearn more%2$s%3$s","wordpress-seo"),"<a>","<ArrowNarrowRightIcon />","</a>"),y))),(0,e.createElement)("div",{className:"yst-w-full yst-flex yst-mt-10"},(0,e.createElement)(o.Button,{as:"a",className:"yst-grow",size:"extra-large",variant:"upsell",href:a,target:"_blank",ref:u},(0,e.createElement)(C,{className:"yst--ml-1 yst-mr-2 yst-h-5 yst-w-5"}),c,(0,e.createElement)("span",{className:"yst-sr-only"},/* translators: Hidden accessibility text. */
(0,L.__)("(Opens in a new browser tab)","wordpress-seo")))),d,(0,e.createElement)(o.Button,{as:"a",className:"yst-mt-4",variant:"tertiary",onClick:p},(0,L.__)("Close","wordpress-seo")))};T.propTypes={learnMoreLink:$().string.isRequired,upsellLink:$().string.isRequired,thumbnail:$().shape({src:$().string.isRequired,width:$().string,height:$().string}).isRequired,wistiaEmbedPermission:$().shape({value:$().bool.isRequired,status:$().string.isRequired,set:$().func.isRequired}).isRequired,title:$().string,upsellLabel:$().string,newToText:$().string,isProductCopy:$().bool,bundleNote:$().oneOfType([$().string,$().element])},T.defaultProps={title:(0,L.__)("Use AI to write your titles & meta descriptions!","wordpress-seo"),upsellLabel:(0,L.sprintf)(/* translators: %1$s expands to Yoast SEO Premium. */
(0,L.__)("Unlock with %1$s","wordpress-seo"),"Yoast SEO Premium"),newToText:(0,L.sprintf)(/* translators: %1$s expands to Yoast SEO Premium. */
(0,L.__)("New in %1$s","wordpress-seo"),"Yoast SEO Premium"),isProductCopy:!1,bundleNote:""};const H={variant:{lg:{grid:"yst-grid lg:yst-grid-cols-3 lg:yst-gap-12",col1:"yst-col-span-1",col2:"lg:yst-mt-0 lg:yst-col-span-2"},xl:{grid:"yst-grid xl:yst-grid-cols-3 xl:yst-gap-12",col1:"yst-col-span-1",col2:"xl:yst-mt-0 xl:yst-col-span-2"},"2xl":{grid:"yst-grid 2xl:yst-grid-cols-3 2xl:yst-gap-12",col1:"yst-col-span-1",col2:"2xl:yst-mt-0 2xl:yst-col-span-2"}}},A=({id:t,children:s,title:r,description:a=null,variant:n="2xl"})=>(0,e.createElement)("section",{id:t,className:H.variant[n].grid},(0,e.createElement)("div",{className:H.variant[n].col1},(0,e.createElement)("div",{className:"yst-max-w-screen-sm"},(0,e.createElement)(o.Title,{as:"h2",size:"4"},r),a&&(0,e.createElement)("p",{className:"yst-mt-2"},a))),(0,e.createElement)("fieldset",{className:`yst-min-w-0 yst-mt-8 ${H.variant[n].col2}`},(0,e.createElement)("legend",{className:"yst-sr-only"},r),(0,e.createElement)("div",{className:"yst-space-y-8"},s)));var B;function z(){return z=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var s=arguments[t];for(var r in s)Object.prototype.hasOwnProperty.call(s,r)&&(e[r]=s[r])}return e},z.apply(this,arguments)}A.propTypes={id:$().string,children:$().node.isRequired,title:$().node.isRequired,description:$().node,variant:$().oneOf(Object.keys(H.variant))};const M=t=>e.createElement("svg",z({xmlns:"http://www.w3.org/2000/svg","aria-hidden":"true",viewBox:"0 0 1000 1000"},t),B||(B=e.createElement("path",{fill:"#fff",d:"M500 0C223.9 0 0 223.9 0 500s223.9 500 500 500 500-223.9 500-500S776.1 0 500 0Zm87.2 412.4c0-21.9 4.3-40.2 13.1-54.4s24-27.1 45.9-38.2l10.1-4.9c17.8-9 22.4-16.7 22.4-26 0-11.1-9.5-19.1-25-19.1-18.3 0-32.2 9.5-41.8 28.9l-24.7-24.8c5.4-11.6 14.1-20.9 25.8-28.1a70.8 70.8 0 0 1 38.9-11.1c17.8 0 33.3 4.6 45.9 14.2s19.4 22.7 19.4 39.4c0 26.6-15 42.9-43.1 57.3l-15.7 8c-16.8 8.5-25.1 16-27.4 29.4h85.4v35.4H587.2Zm-82.1 373.3c-157.8 0-285.7-127.9-285.7-285.7s127.9-285.7 285.7-285.7a286.4 286.4 0 0 1 55.9 5.5l-55.9 116.9c-90 0-163.3 73.3-163.3 163.3s73.3 163.3 163.3 163.3a162.8 162.8 0 0 0 106.4-39.6l61.8 107.2a283.9 283.9 0 0 1-168.2 54.8ZM705 704.1l-70.7-122.5H492.9l70.7-122.4H705l70.7 122.4Z"}))),F=({href:t,children:s,...r})=>(0,e.createElement)(o.Link,{target:"_blank",rel:"noopener noreferrer",...r,href:t},s,(0,e.createElement)("span",{className:"yst-sr-only"},/* translators: Hidden accessibility text. */
(0,L.__)("(Opens in a new browser tab)","wordpress-seo")));var U,Y,W;function Q(){return Q=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var s=arguments[t];for(var r in s)Object.prototype.hasOwnProperty.call(s,r)&&(e[r]=s[r])}return e},Q.apply(this,arguments)}F.propTypes={href:$().string.isRequired,children:$().node},F.defaultProps={children:null};const V=t=>e.createElement("svg",Q({xmlns:"http://www.w3.org/2000/svg",id:"star-rating-half_svg__Layer_1","data-name":"Layer 1",viewBox:"0 0 500 475.53"},t),U||(U=e.createElement("defs",null,e.createElement("style",null,".star-rating-half_svg__cls-1{fill:#fbbf24}"))),Y||(Y=e.createElement("path",{d:"M250 392.04 98.15 471.87l29-169.09L4.3 183.03l169.77-24.67L250 4.52l75.93 153.84 169.77 24.67-122.85 119.75 29 169.09L250 392.04z",className:"star-rating-half_svg__cls-1"})),W||(W=e.createElement("path",{d:"m250 9.04 73.67 149.27.93 1.88 2.08.3 164.72 23.94-119.19 116.19-1.51 1.47.36 2.07 28.14 164.06-147.34-77.46-1.86-1-1.86 1-147.34 77.46 28.14-164.06.36-2.07-1.51-1.47L8.6 184.43l164.72-23.9 2.08-.3.93-1.88L250 9.04m0-9-77.25 156.49L0 181.64l125 121.89-29.51 172L250 394.3l154.51 81.23-29.51-172 125-121.89-172.75-25.11L250 0Z",className:"star-rating-half_svg__cls-1"})),e.createElement("path",{d:"m500 181.64-172.75-25.11L250 0v394.3l154.51 81.23L375 303.48l125-121.84z",style:{fill:"#f3f4f6"}}));function G(){return G=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var s=arguments[t];for(var r in s)Object.prototype.hasOwnProperty.call(s,r)&&(e[r]=s[r])}return e},G.apply(this,arguments)}const Z=t=>e.createElement("svg",G({xmlns:"http://www.w3.org/2000/svg","data-name":"Layer 1",viewBox:"0 0 500 475.53"},t),e.createElement("path",{d:"m250 0 77.25 156.53L500 181.64 375 303.48l29.51 172.05L250 394.3 95.49 475.53 125 303.48 0 181.64l172.75-25.11L250 0z",style:{fill:"#fbbf24"}}));var D,J,K,X,ee,te,se,re,ae;function ne(){return ne=Object.assign?Object.assign.bind():function(e){for(var t=1;t<arguments.length;t++){var s=arguments[t];for(var r in s)Object.prototype.hasOwnProperty.call(s,r)&&(e[r]=s[r])}return e},ne.apply(this,arguments)}const le=t=>e.createElement("svg",ne({xmlns:"http://www.w3.org/2000/svg","aria-hidden":"true",viewBox:"0 0 500 500"},t),D||(D=e.createElement("path",{fill:"#a4286a",d:"M80 0h340a80 80 0 0 1 80 80v420H80a80 80 0 0 1-80-80V80A80 80 0 0 1 80 0z"})),J||(J=e.createElement("path",{fill:"#6c2548",d:"M437.61 2 155.89 500H500V80a80 80 0 0 0-62.39-78z"})),K||(K=e.createElement("path",{fill:"#fff",d:"M74.4 337.3v34.9c21.6-.9 38.5-8 52.8-22.5s27.4-38 39.9-72.9l92.6-248h-44.8L140.3 236l-37-116.2h-41l54.4 139.8a57.54 57.54 0 0 1 0 41.8c-5.5 14.2-15.4 30.9-42.3 35.9z"})),X||(X=e.createElement("circle",{cx:368.33,cy:124.68,r:97.34,fill:"#9fda4f",transform:"rotate(-45 368.335 124.68)"})),ee||(ee=e.createElement("path",{fill:"#77b227",d:"m416.2 39.93-95.74 169.51A97.34 97.34 0 1 0 416.2 39.93z"})),te||(te=e.createElement("path",{fill:"#fec228",d:"m294.78 254.75-.15-.08-.13-.07a63.6 63.6 0 0 0-62.56 110.76h.13a63.6 63.6 0 0 0 62.71-110.67z"})),se||(se=e.createElement("path",{fill:"#f49a00",d:"m294.5 254.59-62.56 110.76a63.6 63.6 0 1 0 62.56-110.76z"})),re||(re=e.createElement("path",{fill:"#ff4e47",d:"M222.31 450.07A38.16 38.16 0 0 0 203 416.83a38.18 38.18 0 1 0 19.41 33.27z"})),ae||(ae=e.createElement("path",{fill:"#ed261f",d:"m202.9 416.8-37.54 66.48a38.17 38.17 0 0 0 37.54-66.48z"}))),oe=({link:t,linkProps:s,promotions:r})=>{const a=(0,l.useMemo)((()=>(0,L.__)("Use AI to generate titles and meta descriptions, automatically redirect deleted pages, get 24/7 support, and much, much more!","wordpress-seo")),[]),n=(0,l.createInterpolateElement)((0,L.sprintf)(/* translators: %1$s and %2$s expand to a span wrap to avoid linebreaks. %3$s expands to "Yoast SEO Premium". */
(0,L.__)("%1$sGet%2$s %3$s","wordpress-seo"),"<nowrap>","</nowrap>","Yoast SEO Premium"),{nowrap:(0,e.createElement)("span",{className:"yst-whitespace-nowrap"})}),i=r.includes("black-friday-2023-promotion"),c=(0,l.createInterpolateElement)((0,L.sprintf)(/* translators: %1$s and %2$s expand to strong tags. */
(0,L.__)("%1$sSAVE 30%%%2$s on your 12 month subscription","wordpress-seo"),"<strong>","</strong>"),{strong:(0,e.createElement)("strong",null)});return(0,e.createElement)("div",{className:"yst-p-6 yst-rounded-lg yst-text-white yst-bg-primary-500 yst-shadow"},(0,e.createElement)("figure",{className:"yst-logo-square yst-w-16 yst-h-16 yst-mx-auto yst-overflow-hidden yst-border yst-border-white yst-rounded-xl yst-rounded-br-none yst-relative yst-z-10 yst-mt-[-2.6rem]"},(0,e.createElement)(le,null)),i&&(0,e.createElement)("div",{className:"sidebar__sale_banner_container"},(0,e.createElement)("div",{className:"sidebar__sale_banner"},(0,e.createElement)("span",{className:"banner_text"},(0,L.__)("BLACK FRIDAY - 30% OFF","wordpress-seo")))),(0,e.createElement)(o.Title,{as:"h2",className:"yst-mt-6 yst-text-base yst-font-extrabold yst-text-white"},n),(0,e.createElement)("p",{className:"yst-mt-2"},a),i&&(0,e.createElement)("div",{className:"yst-text-center yst-border-t-[1px] yst-border-white yst-italic yst-mt-3"},(0,e.createElement)("p",{className:"yst-text-[10px] yst-my-3 yst-mx-0"},c)),(0,e.createElement)(o.Button,{as:"a",variant:"upsell",href:t,target:"_blank",rel:"noopener",className:"yst-flex yst-justify-center yst-gap-2 yst-mt-4 focus:yst-ring-offset-primary-500",...s},(0,e.createElement)("span",null,i?(0,L.__)("Claim your 30% off now!","wordpress-seo"):n),(0,e.createElement)(P,{className:"yst-w-4 yst-h-4 yst-icon-rtl"})),(0,e.createElement)("p",{className:"yst-text-center yst-text-xs yst-mx-2 yst-font-light yst-leading-5 yst-mt-2"},(0,L.__)("Only $/€/£99 per year (ex VAT)","wordpress-seo"),(0,e.createElement)("br",null),(0,L.__)("30-day money back guarantee.","wordpress-seo")),(0,e.createElement)("hr",{className:"yst-border-t yst-border-primary-300 yst-my-4"}),(0,e.createElement)("a",{className:"yst-block yst-mt-4 yst-no-underline",href:"https://www.g2.com/products/yoast-yoast/reviews",target:"_blank",rel:"noopener noreferrer"},(0,e.createElement)("span",{className:"yst-font-medium yst-text-white hover:yst-underline"},(0,L.__)("Read reviews from real users","wordpress-seo")),(0,e.createElement)("span",{className:"yst-flex yst-gap-2 yst-mt-2 yst-items-center"},(0,e.createElement)(M,{className:"yst-w-5 yst-h-5"}),(0,e.createElement)("span",{className:"yst-flex yst-gap-1"},(0,e.createElement)(Z,{className:"yst-w-5 yst-h-5"}),(0,e.createElement)(Z,{className:"yst-w-5 yst-h-5"}),(0,e.createElement)(Z,{className:"yst-w-5 yst-h-5"}),(0,e.createElement)(Z,{className:"yst-w-5 yst-h-5"}),(0,e.createElement)(V,{className:"yst-w-5 yst-h-5"})),(0,e.createElement)("span",{className:"yst-text-sm yst-font-semibold yst-text-white"},"4.6 / 5"))))};oe.propTypes={link:$().string.isRequired,linkProps:$().object,promotions:$().array},oe.defaultProps={linkProps:{},promotions:[]};const ie=({children:t})=>(0,e.createElement)("div",{className:"xl:yst-max-w-3xl xl:yst-fixed xl:yst-right-8 xl:yst-w-[16rem]"},(0,e.createElement)("div",{className:"yst-grid yst-grid-cols-1 sm:yst-grid-cols-2 min-[783px]:yst-grid-cols-1 lg:yst-grid-cols-2 xl:yst-grid-cols-1 yst-gap-4"},t));ie.propTypes={children:$().node.isRequired};const ce=window.yoast.reactHelmet,me=({videoId:t,thumbnail:s,wistiaEmbedPermission:r})=>{const[a,n]=(0,l.useState)(r.value?k:x),i=(0,l.useCallback)((()=>n(k)),[n]),c=(0,l.useCallback)((()=>{r.value?i():n(_)}),[r.value,i,n]),m=(0,l.useCallback)((()=>n(x)),[n]),d=(0,l.useCallback)((()=>{r.set(!0),i()}),[r.set,i]);return(0,e.createElement)(e.Fragment,null,r.value&&(0,e.createElement)(ce.Helmet,null,(0,e.createElement)("script",{src:"https://fast.wistia.com/assets/external/E-v1.js",async:!0})),(0,e.createElement)("div",{className:"yst-relative yst-w-full yst-h-0 yst-pt-[56.25%] yst-overflow-hidden yst-rounded-md yst-drop-shadow-md yst-bg-white"},a===x&&(0,e.createElement)("button",{type:"button",className:"yst-absolute yst-inset-0 yst-button yst-p-0 yst-border-none yst-bg-white yst-transition-opacity yst-duration-1000 yst-opacity-100",onClick:c},(0,e.createElement)("img",{className:"yst-w-full yst-h-auto",alt:"",loading:"lazy",decoding:"async",...s})),a===_&&(0,e.createElement)("div",{className:"yst-absolute yst-inset-0 yst-flex yst-flex-col yst-items-center yst-justify-center yst-bg-white"},(0,e.createElement)("p",{className:"yst-max-w-xs yst-mx-auto yst-text-center"},r.status===b&&(0,e.createElement)(o.Spinner,null),r.status!==b&&(0,L.sprintf)(/* translators: %1$s expands to Yoast SEO. %2$s expands to Wistia. */
(0,L.__)("To see this video, you need to allow %1$s to load embedded videos from %2$s.","wordpress-seo"),"Yoast SEO","Wistia")),(0,e.createElement)("div",{className:"yst-flex yst-mt-6 yst-gap-x-4"},(0,e.createElement)(o.Button,{type:"button",variant:"secondary",onClick:m,disabled:r.status===b},(0,L.__)("Deny","wordpress-seo")),(0,e.createElement)(o.Button,{type:"button",variant:"primary",onClick:d,disabled:r.status===b},(0,L.__)("Allow","wordpress-seo")))),r.value&&a===k&&(0,e.createElement)("div",{className:"yst-absolute yst-w-full yst-h-full yst-top-0 yst-left-0"},null===t&&(0,e.createElement)(o.Spinner,{className:"yst-h-full yst-mx-auto"}),null!==t&&(0,e.createElement)("div",{className:`wistia_embed wistia_async_${t} videoFoam=true`}))))};me.propTypes={videoId:$().string.isRequired,thumbnail:$().shape({src:$().string.isRequired,width:$().string,height:$().string}).isRequired,wistiaEmbedPermission:$().shape({value:$().bool.isRequired,status:$().string.isRequired,set:$().func.isRequired}).isRequired};const de="@yoast/support",pe=(e,t=[],...s)=>(0,r.useSelect)((t=>{var r,a;return null===(r=(a=t(de))[e])||void 0===r?void 0:r.call(a,...s)}),t),ue=({id:t,children:s,title:r,description:a=null})=>{const n=pe("selectPreference",[],"isPremium");return(0,e.createElement)(A,{id:t,title:r,description:a,variant:n?"lg":"xl"},s)};ue.propTypes={id:$().string,children:$().node.isRequired,title:$().node.isRequired,description:$().node};const ye=e.forwardRef((function(t,s){return e.createElement("svg",Object.assign({xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 20 20",fill:"currentColor","aria-hidden":"true",ref:s},t),e.createElement("path",{fillRule:"evenodd",d:"M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z",clipRule:"evenodd"}))})),ge=({imageSrc:t,title:s,description:r,linkHref:a,linkText:n})=>(0,e.createElement)(o.Card,null,(0,e.createElement)(o.Card.Header,{className:"yst-h-auto yst-p-0"},(0,e.createElement)("img",{className:"yst-w-full yst-transition yst-duration-200",src:t,alt:"",width:500,height:250,loading:"lazy",decoding:"async"})),(0,e.createElement)(o.Card.Content,{className:"yst-flex yst-flex-col yst-gap-3"},(0,e.createElement)(o.Title,{as:"h3"},s),r),(0,e.createElement)(o.Link,{href:a,className:"yst-flex yst-items-center yst-mt-[18px] yst-no-underline yst-font-medium yst-text-primary-500",target:"_blank"},n,(0,e.createElement)("span",{className:"yst-sr-only"},/* translators: Hidden accessibility text. */
(0,L.__)("(Opens in a new browser tab)","wordpress-seo")),(0,e.createElement)(ye,{className:"yst-h-4 yst-w-4 yst-ml-1 yst-icon-rtl"})));ge.propTypes={imageSrc:$().string.isRequired,title:$().string.isRequired,description:$().string.isRequired,linkHref:$().string.isRequired,linkText:$().string.isRequired};const fe=()=>{document.querySelector("#beacon-container .BeaconFabButtonFrame iframe")?window.Beacon("open"):document.querySelector("#yoast-helpscout-beacon button").click()},we=()=>{const t=pe("selectPreference",[],"isPremium",!1),s=pe("selectPreference",[],"promotions",[]),r=pe("selectUpsellSettingsAsProps"),a=pe("selectPreference",[],"pluginUrl",""),n=pe("selectLinkParams"),i=pe("selectLink",[],"https://yoa.st/3t6"),c=pe("selectLink",[],"https://yoa.st/jj"),d=pe("selectLink",[],"https://yoa.st/help-center-support-card"),p=pe("selectLink",[],"https://yoa.st/support-forums-support-card"),u=pe("selectLink",[],"https://yoa.st/github-repository-support-card"),y=pe("selectLink",[],"https://yoa.st/contact-support-to-unlock-premium-support-section"),g=(0,l.useMemo)((()=>[{title:(0,e.createElement)("span",null,"How do I set up ",(0,e.createElement)("strong",null,"canonical URLs"),"?"),link:(0,m.addQueryArgs)("https://yoa.st/canonical-urls-support-faq",n)},{title:(0,e.createElement)("span",null,"How do I use ",(0,e.createElement)("strong",null,"XML sitemaps"),"?"),link:(0,m.addQueryArgs)("https://yoa.st/xml-sitemaps-support-faq",n)},{title:(0,e.createElement)("span",null,"How do I implement ",(0,e.createElement)("strong",null,"breadcrumbs"),"?"),link:(0,m.addQueryArgs)("https://yoa.st/implement-breadcrumbs-support-faq",n)},{title:(0,e.createElement)("span",null,"How do I ",(0,e.createElement)("strong",null,"submit my sitemap")," to search engines?"),link:(0,m.addQueryArgs)("https://yoa.st/submit-sitemap-support-faq",n)},{title:(0,e.createElement)("span",null,"How do I edit my ",(0,e.createElement)("strong",null,"robots.txt file"),"?"),link:(0,m.addQueryArgs)("https://yoa.st/edit-robots-txt-support-faq",n)},{title:(0,e.createElement)("span",null,"What are the ",(0,e.createElement)("strong",null,"meta robots advanced settings"),"?"),link:(0,m.addQueryArgs)("https://yoa.st/meta-robots-settings-support-faq",n)},{title:(0,e.createElement)("span",null,"Where can I find a ",(0,e.createElement)("strong",null,"glossary")," of SEO terms?"),link:(0,m.addQueryArgs)("https://yoa.st/seo-terms-vocabulary-support-faq",n)},{title:(0,e.createElement)("span",null,"What are ",(0,e.createElement)("strong",null,"transition words"),"?"),link:(0,m.addQueryArgs)("https://yoa.st/transition-words-support-faq",n)}]),[]);return(0,e.createElement)("div",{className:"yst-p-4 min-[783px]:yst-p-8"},(0,e.createElement)("div",{className:O()("yst-flex yst-flex-grow yst-flex-wrap",!t&&"xl:yst-pr-[17.5rem]")},(0,e.createElement)(o.Paper,{as:"main",className:"yst-flex-grow yst-mb-8 xl:yst-mb-0"},(0,e.createElement)(o.Paper.Header,null,(0,e.createElement)("div",{className:"yst-max-w-screen-sm"},(0,e.createElement)(o.Title,null,(0,L.__)("Support","wordpress-seo")),(0,e.createElement)("p",{className:"yst-text-tiny yst-mt-3"},(0,L.__)("If you have any questions, need a hand with a technical issue, or just want to say hi, we've got you covered. Get in touch with us and we'll be happy to assist you!","wordpress-seo")))),(0,e.createElement)(o.Paper.Content,null,(0,e.createElement)("div",{className:"yst-max-w-6xl"},(0,e.createElement)(ue,{title:(0,L.__)("Frequently asked questions","wordpress-seo"),description:(0,L.sprintf)(/* translators: %1$s expands to Yoast SEO. */
(0,L.__)("Here, you'll find answers to commonly asked questions about using %1$s. If you don't see your question listed, you can have a look at the section below.","wordpress-seo"),"Yoast SEO")},(0,e.createElement)("ul",null,g.map((({title:t,link:s},r)=>(0,e.createElement)(l.Fragment,{key:`faq-${r}`},r>0&&(0,e.createElement)("hr",{className:"yst-my-3"}),(0,e.createElement)("li",null,(0,e.createElement)(o.Link,{href:s,className:"yst-flex yst-items-center yst-font-medium yst-no-underline",target:"_blank"},t,(0,e.createElement)(P,{className:"yst-inline-block yst-ml-1.5 yst-h-3 yst-w-3 yst-icon-rtl"})))))))),(0,e.createElement)("hr",{className:"yst-my-8"}),(0,e.createElement)(ue,{title:(0,L.__)("Additional resources","wordpress-seo"),description:(0,L.sprintf)(/* translators: %1$s expands to Yoast SEO. */
(0,L.__)("Need help with %1$s? These resources are a great place to start!","wordpress-seo"),"Yoast SEO")},(0,e.createElement)("div",{className:"yst-grid yst-gap-6 yst-grid-cols-3 max-sm:yst-grid-cols-1"},(0,e.createElement)(ge,{imageSrc:`${a}/images/support/help_center.png`,title:(0,L.sprintf)(/* translators: %1$s expands to Yoast. */
(0,L.__)("%1$s's help center","wordpress-seo"),"Yoast"),description:(0,L.sprintf)(/* translators: %1$s expands to Yoast SEO. */
(0,L.__)("Have a look at our help center to find articles, tutorials, and other resources to help you get the most out of %1$s!","wordpress-seo"),"Yoast SEO"),linkHref:d,linkText:(0,L.__)("Visit our help center","wordpress-seo")}),(0,e.createElement)(ge,{imageSrc:`${a}/images/support/support_forums.png`,title:(0,L.sprintf)(/* translators: %1$s expands to Yoast SEO. */
(0,L.__)("WordPress support forum for %1$s","wordpress-seo"),"Yoast SEO"),description:(0,L.sprintf)(/* translators: %1$s expands to Yoast SEO. */
(0,L.__)("In the WordPress support forum for %1$s you can find answers or ask for help from %1$s users in the WordPress community.","wordpress-seo"),"Yoast SEO"),linkHref:p,linkText:(0,L.__)("Visit WordPress forum","wordpress-seo")}),(0,e.createElement)(ge,{imageSrc:`${a}/images/support/github.png`,title:(0,L.__)("Raise a bug report on GitHub","wordpress-seo"),description:(0,L.sprintf)(/* translators: %1$s expands to Yoast SEO. */
(0,L.__)("Have you stumbled upon a bug while using %1$s? Please raise a bug report on our GitHub repository to let us know about the issue!","wordpress-seo"),"Yoast SEO"),linkHref:u,linkText:(0,L.__)("Write a bug report","wordpress-seo")}))),(0,e.createElement)("hr",{className:"yst-my-8"}),(0,e.createElement)(ue,{title:(0,e.createElement)("div",{className:"yst-flex yst-items-center yst-gap-1.5"},(0,e.createElement)("span",null,(0,L.__)("Contact our support team","wordpress-seo")),t&&(0,e.createElement)(o.Badge,{variant:"upsell"},"Premium")),description:(0,e.createElement)(l.Fragment,null,(0,e.createElement)("span",null,(0,L.__)("If you don't find the answers you're looking for and need personalized help, you can get 24/7 support from one of our support engineers.","wordpress-seo")),(0,e.createElement)("span",{className:"yst-block yst-mt-4"},(0,l.createInterpolateElement)((0,L.sprintf)(/* translators: %1$s expands to an opening span tag, %2$s expands to a closing span tag. */
(0,L.__)("%1$sSupport language:%2$s English","wordpress-seo"),"<span>","</span>"),{span:(0,e.createElement)("span",{className:"yst-font-medium yst-text-slate-800"})})))},(0,e.createElement)(o.FeatureUpsell,{shouldUpsell:!t,variant:"card",cardLink:y,cardText:(0,L.sprintf)(/* translators: %1$s expands to Premium. */
(0,L.__)("Unlock with %1$s","wordpress-seo"),"Premium"),...r},(0,e.createElement)("div",{className:O()("yst-flex",!t&&"yst-opacity-50")},(0,e.createElement)("div",{className:"yst-mr-6"},(0,e.createElement)("p",null,(0,L.__)("Our support team is here to answer any questions you may have. Fill out the (pop-up) contact form, and we'll get back to you as soon as possible!","wordpress-seo")),(0,e.createElement)(o.Button,{variant:"secondary",className:"yst-mt-4",onClick:fe},(0,L.__)("Contact our support team","wordpress-seo"),(0,e.createElement)(P,{className:"yst-inline-block yst-ml-1.5 yst-h-3 yst-w-3 yst-icon-rtl"}))),(0,e.createElement)("img",{src:`${a}/images/support-team.svg`,alt:"",width:125,height:100,loading:"lazy",decoding:"async"}))))))),!t&&(0,e.createElement)(ie,null,(0,e.createElement)(oe,{link:c,linkProps:r,promotions:s}),(0,e.createElement)(I,{link:i}))))},he="preferences",Ee=(0,c.createSlice)({name:he,initialState:{},reducers:{}}),ve=Ee.getInitialState,be={selectPreference:(e,t,s={})=>(0,i.get)(e,`${he}.${t}`,s),selectPreferences:e=>(0,i.get)(e,he,{})};be.selectUpsellSettingsAsProps=(0,c.createSelector)([e=>be.selectPreference(e,"upsellSettings",{}),(e,t="premiumCtbId")=>t],((e,t)=>({"data-action":null==e?void 0:e.actionId,"data-ctb-id":null==e?void 0:e[t]})));const xe=Ee.actions,_e=Ee.reducer;n()((()=>{const s=document.getElementById("yoast-seo-support");if(!s)return;(({initialState:e={}}={})=>{(0,r.register)((({initialState:e})=>(0,r.createReduxStore)(de,{actions:{...g,...xe},selectors:{...y,...be},initialState:(0,i.merge)({},{[d]:u(),[he]:ve()},e),reducer:(0,r.combineReducers)({[d]:f,[he]:_e})}))({initialState:e}))})({initialState:{[d]:(0,i.get)(window,"wpseoScriptData.linkParams",{}),[he]:(0,i.get)(window,"wpseoScriptData.preferences",{})}}),(()=>{const e=document.getElementById("wpcontent"),t=document.getElementById("adminmenuwrap");e&&t&&(e.style.minHeight=`${t.offsetHeight}px`)})();const a=(0,r.select)(de).selectPreference("isRtl",!1);(0,l.render)((0,e.createElement)(o.Root,{context:{isRtl:a}},(0,e.createElement)(t.SlotFillProvider,null,(0,e.createElement)(we,null))),s)}))})()})();
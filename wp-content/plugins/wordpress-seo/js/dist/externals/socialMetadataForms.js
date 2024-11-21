(()=>{"use strict";var e={17966:(e,t,i)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.withCaretStyle=t.default=void 0;var r=i(65736),o=i(23695),a=i(10224),n=i(37188),l=p(i(85890)),s=function(e,t){if(e&&e.__esModule)return e;if(null===e||"object"!=typeof e&&"function"!=typeof e)return{default:e};var i=u(t);if(i&&i.has(e))return i.get(e);var r={__proto__:null},o=Object.defineProperty&&Object.getOwnPropertyDescriptor;for(var a in e)if("default"!==a&&Object.prototype.hasOwnProperty.call(e,a)){var n=o?Object.getOwnPropertyDescriptor(e,a):null;n&&(n.get||n.set)?Object.defineProperty(r,a,n):r[a]=e[a]}return r.default=e,i&&i.set(e,r),r}(i(99196)),d=p(i(98487)),c=i(81413);function u(e){if("function"!=typeof WeakMap)return null;var t=new WeakMap,i=new WeakMap;return(u=function(e){return e?i:t})(e)}function p(e){return e&&e.__esModule?e:{default:e}}const f=e=>e?n.colors.$color_snippet_focus:n.colors.$color_snippet_hover,g=d.default.div`
	position: relative;

	${e=>!e.isPremium&&"\n\t\t.yoast-image-select__preview {\n\t\t\twidth: 130px;\n\t\t\tmin-height: 72px;\n\t\t\tmax-height: 130px;\n\t\t}\n\t"};
`;g.propTypes={isPremium:l.default.bool},g.defaultProps={isPremium:!1};const m=d.default.div`
	display: ${e=>e.isActive||e.isHovered?"block":"none"};

	::before {
		position: absolute;
		top: -2px;
		${(0,o.getDirectionalStyle)("left","right")}: -25px;
		width: 24px;
		height: 24px;
		background-image: url(
		${e=>(0,o.getDirectionalStyle)((0,n.angleRight)(f(e.isActive)),(0,n.angleLeft)(f(e.isActive)))}
		);
		color: ${e=>f(e.isActive)};
		background-size: 24px;
		background-repeat: no-repeat;
		background-position: center;
		content: "";
	}
`;m.propTypes={isActive:l.default.bool,isHovered:l.default.bool},m.defaultProps={isActive:!1,isHovered:!1};const _=e=>function t(i){t.propTypes={isActive:l.default.bool.isRequired,isHovered:l.default.bool.isRequired,isPremium:l.default.bool};const{isActive:r,isHovered:o,isPremium:a,...n}=i;return s.default.createElement(g,{isPremium:a},s.default.createElement(m,{isActive:r,isHovered:o}),s.default.createElement(e,n))};t.withCaretStyle=_;const E=_(c.ImageSelect);class I extends s.Component{constructor(e){super(e),this.onImageEnter=e.onMouseHover.bind(this,"image"),this.onTitleEnter=e.onMouseHover.bind(this,"title"),this.onDescriptionEnter=e.onMouseHover.bind(this,"description"),this.onLeave=e.onMouseHover.bind(this,""),this.onImageSelectBlur=e.onSelect.bind(this,""),this.onSelectTitleEditor=this.onSelectEditor.bind(this,"title"),this.onSelectDescriptionEditor=this.onSelectEditor.bind(this,"description"),this.onDeselectEditor=this.onSelectEditor.bind(this,""),this.onTitleEditorRef=this.onSetEditorRef.bind(this,"title"),this.onDescriptionEditorRef=this.onSetEditorRef.bind(this,"description")}onSelectEditor(e){this.props.onSelect(e)}onSetEditorRef(e,t){this.props.setEditorRef(e,t)}getFieldsTitles(e){return"Twitter"===e?{imageSelectTitle:(0,r.__)("Twitter image","wordpress-seo"),titleEditorTitle:(0,r.__)("Twitter title","wordpress-seo"),descEditorTitle:(0,r.__)("Twitter description","wordpress-seo")}:"X"===e?{imageSelectTitle:(0,r.__)("X image","wordpress-seo"),titleEditorTitle:(0,r.__)("X title","wordpress-seo"),descEditorTitle:(0,r.__)("X description","wordpress-seo")}:{imageSelectTitle:(0,r.__)("Social image","wordpress-seo"),titleEditorTitle:(0,r.__)("Social title","wordpress-seo"),descEditorTitle:(0,r.__)("Social description","wordpress-seo")}}render(){const{socialMediumName:e,onSelectImageClick:t,onRemoveImageClick:i,title:r,titleInputPlaceholder:n,description:l,descriptionInputPlaceholder:d,onTitleChange:c,onDescriptionChange:u,onReplacementVariableSearchChange:p,hoveredField:f,activeField:g,isPremium:m,replacementVariables:_,recommendedReplacementVariables:I,imageWarnings:S,imageUrl:h,imageAltText:T,idSuffix:v}=this.props,b=this.getFieldsTitles(e),w=!!h,A=b.imageSelectTitle,y=b.titleEditorTitle,O=b.descEditorTitle,P=e.toLowerCase();return s.default.createElement(s.Fragment,null,s.default.createElement(E,{label:A,onClick:t,onRemoveImageClick:i,warnings:S,imageSelected:w,onMouseEnter:this.onImageEnter,onMouseLeave:this.onLeave,isActive:"image"===g,isHovered:"image"===f,imageUrl:h,imageAltText:T,hasPreview:!m,imageUrlInputId:(0,o.join)([P,"url-input",v]),selectImageButtonId:(0,o.join)([P,"select-button",v]),replaceImageButtonId:(0,o.join)([P,"replace-button",v]),removeImageButtonId:(0,o.join)([P,"remove-button",v]),isPremium:m}),s.default.createElement(a.ReplacementVariableEditor,{onChange:c,content:r,placeholder:n,replacementVariables:_,recommendedReplacementVariables:I,type:"title",fieldId:(0,o.join)([P,"title-input",v]),label:y,onMouseEnter:this.onTitleEnter,onMouseLeave:this.onLeave,onSearchChange:p,isActive:"title"===g,isHovered:"title"===f,withCaret:!0,onFocus:this.onSelectTitleEditor,onBlur:this.onDeselectEditor,editorRef:this.onTitleEditorRef}),s.default.createElement(a.ReplacementVariableEditor,{onChange:u,content:l,placeholder:d,replacementVariables:_,recommendedReplacementVariables:I,type:"description",fieldId:(0,o.join)([P,"description-input",v]),label:O,onMouseEnter:this.onDescriptionEnter,onMouseLeave:this.onLeave,onSearchChange:p,isActive:"description"===g,isHovered:"description"===f,withCaret:!0,onFocus:this.onSelectDescriptionEditor,onBlur:this.onDeselectEditor,editorRef:this.onDescriptionEditorRef}))}}I.propTypes={socialMediumName:l.default.oneOf(["Twitter","X","Social"]).isRequired,onSelectImageClick:l.default.func.isRequired,onRemoveImageClick:l.default.func.isRequired,title:l.default.string.isRequired,description:l.default.string.isRequired,onTitleChange:l.default.func.isRequired,onDescriptionChange:l.default.func.isRequired,onReplacementVariableSearchChange:l.default.func,isPremium:l.default.bool,hoveredField:l.default.string,activeField:l.default.string,onSelect:l.default.func,replacementVariables:a.replacementVariablesShape,recommendedReplacementVariables:l.default.arrayOf(l.default.string),imageWarnings:l.default.array,imageUrl:l.default.string,imageAltText:l.default.string,titleInputPlaceholder:l.default.string,descriptionInputPlaceholder:l.default.string,setEditorRef:l.default.func,onMouseHover:l.default.func,idSuffix:l.default.string},I.defaultProps={replacementVariables:[],recommendedReplacementVariables:[],imageWarnings:[],hoveredField:"",activeField:"",onSelect:()=>{},onReplacementVariableSearchChange:null,imageUrl:"",imageAltText:"",titleInputPlaceholder:"",descriptionInputPlaceholder:"",isPremium:!1,setEditorRef:()=>{},onMouseHover:()=>{},idSuffix:""},t.default=I},62815:(e,t)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.TWITTER_IMAGE_SIZES=t.FACEBOOK_IMAGE_SIZES=void 0,t.TWITTER_IMAGE_SIZES={squareWidth:125,squareHeight:125,landscapeWidth:506,landscapeHeight:265,aspectRatio:50.2},t.FACEBOOK_IMAGE_SIZES={squareWidth:158,squareHeight:158,landscapeWidth:527,landscapeHeight:273,portraitWidth:158,portraitHeight:237,aspectRatio:52.2,largeThreshold:{width:446,height:233}}},60015:(e,t,i)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var r=i(62815);t.default=function(e){const{largeThreshold:t}=r.FACEBOOK_IMAGE_SIZES;return e.height>e.width?"portrait":e.width<t.width||e.height<t.height||e.height===e.width?"square":"landscape"}},31357:(e,t)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.setSocialPreviewTitle=t.setSocialPreviewImageUrl=t.setSocialPreviewImageType=t.setSocialPreviewImageId=t.setSocialPreviewImage=t.setSocialPreviewDescription=t.clearSocialPreviewImage=t.SET_SOCIAL_TITLE=t.SET_SOCIAL_IMAGE_URL=t.SET_SOCIAL_IMAGE_TYPE=t.SET_SOCIAL_IMAGE_ID=t.SET_SOCIAL_IMAGE=t.SET_SOCIAL_DESCRIPTION=t.CLEAR_SOCIAL_IMAGE=void 0;const i=t.SET_SOCIAL_TITLE="SET_SOCIAL_TITLE",r=t.SET_SOCIAL_DESCRIPTION="SET_SOCIAL_DESCRIPTION",o=t.SET_SOCIAL_IMAGE_URL="SET_SOCIAL_IMAGE_URL",a=t.SET_SOCIAL_IMAGE_TYPE="SET_SOCIAL_IMAGE_TYPE",n=t.SET_SOCIAL_IMAGE_ID="SET_SOCIAL_IMAGE_ID",l=t.SET_SOCIAL_IMAGE="SET_SOCIAL_IMAGE",s=t.CLEAR_SOCIAL_IMAGE="CLEAR_SOCIAL_IMAGE";t.setSocialPreviewTitle=(e,t)=>({type:i,platform:t,title:e}),t.setSocialPreviewDescription=(e,t)=>({type:r,platform:t,description:e}),t.setSocialPreviewImageUrl=(e,t)=>({type:o,platform:t,imageUrl:e}),t.setSocialPreviewImageType=(e,t)=>({type:a,platform:t,imageType:e}),t.setSocialPreviewImageId=(e,t)=>({type:n,platform:t,imageId:e}),t.setSocialPreviewImage=(e,t)=>({type:l,platform:t,image:e}),t.clearSocialPreviewImage=e=>({type:s,platform:e})},1499:(e,t,i)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var r=i(7185),o=i(31357);const a={title:"",description:"",warnings:[],image:{bytes:null,type:null,height:null,width:null,url:"",id:null,alt:""}};function n(e=a,t){switch(t.type){case o.SET_SOCIAL_TITLE:return{...e,title:t.title};case o.SET_SOCIAL_DESCRIPTION:return{...e,description:t.description};case o.SET_SOCIAL_IMAGE:return{...e,image:{...t.image}};case o.SET_SOCIAL_IMAGE_URL:return{...e,image:{...e.image,url:t.imageUrl}};case o.SET_SOCIAL_IMAGE_TYPE:return{...e,image:{...e.image,type:t.imageType}};case o.SET_SOCIAL_IMAGE_ID:return{...e,image:{...e.image,id:t.imageId}};case o.CLEAR_SOCIAL_IMAGE:return{...e,image:{bytes:null,type:null,height:null,width:null,url:"",id:null,alt:""}};default:return e}}function l(e,t){return(i,r)=>{const{platform:o}=r;return void 0===i?a:o!==t?i:e(i,r)}}const s=(0,r.combineReducers)({facebook:l(n,"facebook"),twitter:l(n,"twitter")});t.default=s},38166:(e,t,i)=>{Object.defineProperty(t,"__esModule",{value:!0}),Object.defineProperty(t,"socialReducer",{enumerable:!0,get:function(){return o.default}});var r,o=(r=i(1499))&&r.__esModule?r:{default:r}},31715:(e,t,i)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var r=i(92819);t.default=e=>{const t={getFacebookData:t=>(0,r.get)(t,`${e}.facebook`,{}),getFacebookTitle:e=>t.getFacebookData(e).title,getFacebookDescription:e=>t.getFacebookData(e).description,getFacebookImageUrl:e=>t.getFacebookData(e).image.url,getFacebookImageType:e=>t.getFacebookData(e).image.type,getTwitterData:t=>(0,r.get)(t,`${e}.twitter`,{}),getTwitterTitle:e=>t.getTwitterData(e).title,getTwitterDescription:e=>t.getTwitterData(e).description,getTwitterImageUrl:e=>t.getTwitterData(e).image.url,getTwitterImageType:e=>t.getTwitterData(e).image.type};return t}},99196:e=>{e.exports=window.React},92819:e=>{e.exports=window.lodash},65736:e=>{e.exports=window.wp.i18n},81413:e=>{e.exports=window.yoast.componentsNew},23695:e=>{e.exports=window.yoast.helpers},85890:e=>{e.exports=window.yoast.propTypes},7185:e=>{e.exports=window.yoast.redux},10224:e=>{e.exports=window.yoast.replacementVariableEditor},37188:e=>{e.exports=window.yoast.styleGuide},98487:e=>{e.exports=window.yoast.styledComponents}},t={};function i(r){var o=t[r];if(void 0!==o)return o.exports;var a=t[r]={exports:{}};return e[r](a,a.exports,i),a.exports}var r={};(()=>{var e=r;Object.defineProperty(e,"__esModule",{value:!0}),Object.defineProperty(e,"FACEBOOK_IMAGE_SIZES",{enumerable:!0,get:function(){return a.FACEBOOK_IMAGE_SIZES}}),Object.defineProperty(e,"SocialMetadataPreviewForm",{enumerable:!0,get:function(){return s.default}}),Object.defineProperty(e,"TWITTER_IMAGE_SIZES",{enumerable:!0,get:function(){return a.TWITTER_IMAGE_SIZES}}),e.actions=void 0,Object.defineProperty(e,"determineFacebookImageMode",{enumerable:!0,get:function(){return n.default}}),Object.defineProperty(e,"selectorsFactory",{enumerable:!0,get:function(){return o.default}}),Object.defineProperty(e,"socialReducer",{enumerable:!0,get:function(){return l.socialReducer}});var t=function(e,t){if(e&&e.__esModule)return e;if(null===e||"object"!=typeof e&&"function"!=typeof e)return{default:e};var i=c(t);if(i&&i.has(e))return i.get(e);var r={__proto__:null},o=Object.defineProperty&&Object.getOwnPropertyDescriptor;for(var a in e)if("default"!==a&&Object.prototype.hasOwnProperty.call(e,a)){var n=o?Object.getOwnPropertyDescriptor(e,a):null;n&&(n.get||n.set)?Object.defineProperty(r,a,n):r[a]=e[a]}return r.default=e,i&&i.set(e,r),r}(i(31357));e.actions=t;var o=d(i(31715)),a=i(62815),n=d(i(60015)),l=i(38166),s=d(i(17966));function d(e){return e&&e.__esModule?e:{default:e}}function c(e){if("function"!=typeof WeakMap)return null;var t=new WeakMap,i=new WeakMap;return(c=function(e){return e?i:t})(e)}})(),(window.yoast=window.yoast||{}).socialMetadataForms=r})();
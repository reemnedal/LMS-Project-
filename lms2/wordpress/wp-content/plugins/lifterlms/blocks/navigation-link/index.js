(()=>{"use strict";const e=window.wp.element,t=window.wp.i18n,l=window.wp.blocks,i=window.wp.blockEditor,n=window.wp.components,a=JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":2,"name":"llms/navigation-link","title":"LifterLMS Link","category":"llms-blocks","parent":["core/navigation"],"description":"Add dynamic LifterLMS links to navigation menus.","keywords":["LifterLMS","Dashboard","My Courses","My Grades","My Memberships","My Achievements","My Certificates","Notifications","Edit Account","Redeem a Voucher","Order History","Sign In","Sign Out"],"textdomain":"lifterlms","attributes":{"label":{"type":"string","default":"Dashboard"},"page":{"type":"string","default":"dashboard"},"llms_visibility":{"type":"string"},"llms_visibility_in":{"type":"string"},"llms_visibility_posts":{"type":"string"}},"supports":{"typography":{"fontSize":true,"fontFamily":true,"fontWeight":true,"lineHeight":true,"textDecoration":true,"textTransform":true,"letterSpacing":true},"spacing":{"width":true}},"editorScript":"file:./index.js"}'),o=window.wp.primitives;var s;const r=(null===(s=window)||void 0===s?void 0:s.llmsNavMenuItems)||[],c=Object.keys(r).map((e=>({label:r[e],value:e})));(0,l.registerBlockType)(a,{icon:()=>(0,e.createElement)(o.SVG,{className:"llms-block-icon",xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 512 512"},(0,e.createElement)(o.Path,{d:"M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z"})),edit:l=>{var a,o,s,d,u,m;let{attributes:p,setAttributes:v}=l;const g=(0,i.useBlockProps)();return(0,e.createElement)(e.Fragment,null,(0,e.createElement)(i.InspectorControls,null,(0,e.createElement)(n.PanelBody,{title:(0,t.__)("LifterLMS Link Settings","lifterlms"),className:"llms-navigation-link-settings"},(0,e.createElement)(n.PanelRow,null,(0,e.createElement)(n.TextControl,{label:(0,t.__)("Label","lifterlms"),value:null!==(a=null!==(o=p.label)&&void 0!==o?o:null==r?void 0:r.dashboard)&&void 0!==a?a:"",onChange:e=>v({label:e}),placeholder:null!==(s=null!==(d=null==r?void 0:r[null==p?void 0:p.page])&&void 0!==d?d:null==r?void 0:r.dashboard)&&void 0!==s?s:"LifterLMS"})),(0,e.createElement)(n.PanelRow,null,(0,e.createElement)(n.SelectControl,{label:(0,t.__)("URL","lifterlms"),value:p.page,options:c,onChange:e=>v({page:e,label:r[e]})})))),(0,e.createElement)("div",g,(0,e.createElement)(i.RichText,{tagName:"div",value:p.label,onChange:e=>v({label:e}),placeholder:null!==(u=null!==(m=null==r?void 0:r[null==p?void 0:p.page])&&void 0!==m?m:null==r?void 0:r.dashboard)&&void 0!==u?u:"LifterLMS"})))}})})();
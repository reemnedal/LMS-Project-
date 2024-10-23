(()=>{"use strict";var e={n:t=>{var l=t&&t.__esModule?()=>t.default:()=>t;return e.d(l,{a:l}),l},d:(t,l)=>{for(var s in l)e.o(l,s)&&!e.o(t,s)&&Object.defineProperty(t,s,{enumerable:!0,get:l[s]})},o:(e,t)=>Object.prototype.hasOwnProperty.call(e,t)};const t=window.wp.element,l=window.wp.blocks,s=window.wp.components,r=window.wp.blockEditor,i=window.wp.i18n,o=window.wp.serverSideRender;var n=e.n(o);const a=JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":2,"name":"llms/course-prerequisites","title":"Course Prerequisites","category":"llms-blocks","description":"Display a notice describing unfulfilled prerequisites for a course.","textdomain":"lifterlms","attributes":{"course_id":{"type":"integer"},"llms_visibility":{"type":"string"},"llms_visibility_in":{"type":"string"},"llms_visibility_posts":{"type":"string"}},"supports":{"align":["wide","full"]},"editorScript":"file:./index.js"}'),c=window.wp.primitives,u=window.wp.data,p=["course","lesson","llms_quiz"],d=function(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"name";const l=null==e?void 0:e.replace("llms_",""),s=l.charAt(0).toUpperCase()+l.slice(1);return"name"===t?l:s},m=function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"course";const{posts:t,currentPostType:l}=(0,u.useSelect)((t=>{var l;return{posts:t("core").getEntityRecords("postType",e),currentPostType:null===(l=t("core/editor"))||void 0===l?void 0:l.getCurrentPostType()}}),[]),s=(d(e),[]);return p.includes(l)||s.push({label:(0,i.__)("Select course","lifterlms"),value:0}),null!=t&&t.length&&t.forEach((e=>{s.push({label:e.title.rendered+" (ID: "+e.id+")",value:e.id})})),p.includes(l)&&s.unshift({label:(0,i.sprintf)(
// Translators: %s = Post type name.
(0,i.__)("Inherit from current %s","lifterlms"),d(l)),value:0}),null!=s&&s.length||s.push({label:(0,i.__)("Loading","lifterlms"),value:0}),s},b=e=>{var l,r;let{attributes:o,setAttributes:n,postType:a="course",attribute:c="course_id"}=e;const u=m(a),p=d(a),b=d(a,"title"),w=(0,i.sprintf)(
// Translators: %s = Post type name.
(0,i.__)("Select the %s to associate with this block.","lifterlms"),p);return(0,t.createElement)(s.PanelRow,null,(0,t.createElement)(s.SelectControl,{label:b,help:w,value:null!==(l=null==o?void 0:o[c])&&void 0!==l?l:null==u||null===(r=u[0])||void 0===r?void 0:r.value,options:u,onChange:e=>{n({[c]:parseInt(e,10)})}}))};(0,l.registerBlockType)(a,{icon:()=>(0,t.createElement)(c.SVG,{className:"llms-block-icon",xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 512 512"},(0,t.createElement)(c.Path,{d:"M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"})),edit:e=>{const{attributes:l}=e,o=(0,r.useBlockProps)(),c=m(),u=(0,t.useMemo)((()=>{let e=(0,i.__)("No prerequisites available for this course. This block will not be displayed.","lifterlms");return!l.course_id&&c.length>0&&(e=(0,i.__)("No course selected. Please choose a Course from the block sidebar panel.","lifterlms")),(0,t.createElement)(n(),{block:a.name,attributes:l,LoadingResponsePlaceholder:()=>(0,t.createElement)(s.Spinner,null),ErrorResponsePlaceholder:()=>(0,t.createElement)("p",{className:"llms-block-error"},(0,i.__)("Error loading content. Please check block settings are valid. This block will not be displayed.","lifterlms")),EmptyResponsePlaceholder:()=>(0,t.createElement)("p",{className:"llms-block-empty"},e)})}),[l]);return(0,t.createElement)(t.Fragment,null,(0,t.createElement)(r.InspectorControls,null,(0,t.createElement)(s.PanelBody,{title:(0,i.__)("Course Prerequisites Settings","lifterlms")},(0,t.createElement)(b,e))),(0,t.createElement)("div",o,(0,t.createElement)(s.Disabled,null,u)))}})})();
import{c as $,u as B,a as C,b as h}from"./NavBar-1adf853c.js";import{r as N,j}from"./app-0e979ee5.js";function x({as:r,bsPrefix:s,className:c,...o}){s=B(s,"col");const p=C(),u=h(),e=[],f=[];return p.forEach(a=>{const n=o[a];delete o[a];let t,i,m;typeof n=="object"&&n!=null?{span:t,offset:i,order:m}=n:t=n;const l=a!==u?`-${a}`:"";t&&e.push(t===!0?`${s}${l}`:`${s}${l}-${t}`),m!=null&&f.push(`order${l}-${m}`),i!=null&&f.push(`offset${l}-${i}`)}),[{...o,className:$(c,...e,...f)},{as:r,bsPrefix:s,spans:e}]}const d=N.forwardRef((r,s)=>{const[{className:c,...o},{as:p="div",bsPrefix:u,spans:e}]=x(r);return j.jsx(p,{...o,ref:s,className:$(c,!e.length&&u)})});d.displayName="Col";const R=d;export{R as C};

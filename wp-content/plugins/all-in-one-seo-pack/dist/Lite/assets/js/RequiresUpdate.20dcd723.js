import{k as a}from"./index.7377ee90.js";import{a as r}from"./addons.e43aad76.js";function u({next:n,router:t,to:e}){return a().isUnlicensed||!r.isActive(e.meta.middlewareData.addon)?(n(),t.push({name:e.meta.middlewareData.routeName}).catch(()=>{})):n()}function c({next:n,router:t,to:e}){return a().isUnlicensed||!r.hasMinimumVersion(e.meta.middlewareData.addon)?(n(),t.push({name:e.meta.middlewareData.routeName}).catch(()=>{})):n()}export{u as R,c as a};

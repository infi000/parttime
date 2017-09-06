<template>
  <div id="app">
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: 'app'
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

body {
  margin:0px;
  background-image:none;
  position:static;
  left:auto;
  width:785px;
  margin-left:0;
  margin-right:0;
  text-align:left;
}
#base {
  position:absolute;
  z-index:0;
}

.ax_default {
  font-family:'Arial Normal', 'Arial';
  font-weight:400;
  font-style:normal;
  font-size:13px;
  color:#333333;
  text-align:center;
  line-height:normal;
}
._一级标题 {
  font-family:'Arial Normal', 'Arial';
  font-weight:bold;
  font-style:normal;
  font-size:32px;
  text-align:left;
}
._二级标题 {
  font-family:'Arial Normal', 'Arial';
  font-weight:bold;
  font-style:normal;
  font-size:24px;
  text-align:left;
}
._三级标题 {
  font-family:'Arial Normal', 'Arial';
  font-weight:bold;
  font-style:normal;
  font-size:18px;
  text-align:left;
}
._四级标题 {
  font-family:'Arial Normal', 'Arial';
  font-weight:bold;
  font-style:normal;
  font-size:14px;
  text-align:left;
}
._五级标题 {
  font-family:'Arial Normal', 'Arial';
  font-weight:bold;
  font-style:normal;
  text-align:left;
}
._六级标题 {
  font-family:'Arial Normal', 'Arial';
  font-weight:bold;
  font-style:normal;
  font-size:10px;
  text-align:left;
}
._文本段落 {
  text-align:left;
}
.table_cell {
}
</style>

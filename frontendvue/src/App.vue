<template>
  <div class="container">
    <Card/>
  </div>
</template>

<script>
import Card from './components/Card.vue'
export default {
  name:"App",
  components:{
    Card,
  },
  data(){
    return {
      idAmplificador:null,
      inputted:null,
    }
  },created(){
      this.idAmplificador = document.getElementById('idAmplificador').value;
  },   
  watch: {
    idAmplificador(newVAL, oldVAL) {
      //this.inputted = `Inputted: ${newVAL, oldVAL}`;
      console.log("inputted : =>",this.inputted);
      //this.getAmplifiersData(val);
    },
    inputted(newVAL,oldVAL){
      consoe.log(newVAL,oldVAL);
    }
  },
  methods: {
    getAmplifiersData(e=12){
      let data = fetch(`http://amplificadores-edificios.local:94/api/v1/amplifiers/history/${e}`).then(res => res.json()).then(data => data);
      console.log(data)
      console.log(data.data)
    }
  },
}
</script>

<style>

.container{
  display: flex;
  justify-content: center;
  align-items: center;
}

</style>

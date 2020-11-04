<template>
   <div class="col-12 py-5 text-center" v-if="loading.form" >
      <i class="fas fa-sync fa-spin loader"></i>
   </div>
   <!-- Contact form -->
   <div id="contact" class="contact-form" v-else>
      <div class="container">
         <div class="row" v-if="errores" >
            <table class="table">
               <thead>
                  <tr>
                     <th>Dato</th>
                     <th>Mensaje</th>
                  </tr>
               </thead>
               <tbody>
                  <tr :key="index" v-for="(error, index) in errores" >
                     <td scope="row">{{ index }}</td>
                     <td>
                        <p :key="index2" v-for="(msg, index2) in error">
                           {{ msg }}
                        </p>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
         <form>
            <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-12">
                  <h1>Get in Touch</h1>
               </div>
               <div class="col-lg-8 col-md-8 col-sm-12 right">
                  <div class="form-group">
                     <input
                        type="text"
                        class="form-control form-control-lg"
                        placeholder="Nombre"
                        name="nombre"
                        v-model="form.nombre"
                     />
                  </div>
                  <div class="form-group">
                     <input
                        type="number"
                        class="form-control form-control-lg"
                        placeholder="Telefono"
                        step="1"
                        min="1"
                        name="telefono"
                        v-model="form.telefono"
                     />
                  </div>
                  <div class="form-group">
                     <input
                        type="email"
                        class="form-control form-control-lg"
                        placeholder="YourEmail@email.com"
                        name="email"
                        v-model="form.email"
                     />
                  </div>
                  <div class="form-group">
                     <input
                        type="asunto"
                        class="form-control form-control-lg"
                        placeholder="Asunto"
                        name="asunto"
                        v-model="form.asunto"
                     />
                  </div>
                  <div class="form-group">
                     <textarea 
                     class="form-control form-control-lg"
                     name="mensaje"
                     v-model="form.mensaje"
                     >
                     </textarea>
                  </div>
               </div>
            </div>
         </form>
         <input
            type="button"
            class="btn btn-secondary btn-block"
            value="Send"
            @click="enviar_formulario"
         />
      </div>
   </div>
</template>

<script>
import toastr from 'toastr/toastr';
import Data from '../constants.js';


export default {
   name:"ContactForm",
   components:{

   },
   mounted(){
      //toastr.info("okokok")
      this.shift_load("form",1000)
   },
   data(){
      return{
         loading:{
            form:true,
         },
         form:{
            nombre:null,
            telefono:null,
            email:null,
            asunto:null,
            mensaje:null,
         },
         errores:null
      }
   },
   methods:{
      enviar_formulario(){
         var vm  = this;
         vm.shift_load("form")
         window.axios.post(`${Data.apiurl}email`, this.form).then(res => {
            vm.errores = {}
            console.table(res.status)
            console.table(res.data)
            if(res.status == 200){
               if(res.data.email){
                  toastr.success("se envio el email")
               }else{
                  toastr.error("no se envio el email pero se guardo la informacion")
               }

               toastr.success("se guardo con exito")
               this.reset_form()
               this.shift_load("form",1000)
            }else{
               console.log(res)
            }

         }).catch(err => {
            console.debug(err)
            if(err.response){
               vm.errores = {}
               var response = err.response;

               if(response.status == 422){
                  toastr.warning("error con los datos enviados")
                  console.log(response.data)
                  vm.errores = response.data
               }else{
                  toastr.error("error de comunicacion con el api")
               }
            }
            this.shift_load("form", 1000)
         })
      },
      reset_form(){
         this.form = {
            nombre:null,
            telefono:null,
            email:null,
            asunto:null,
            mensaje:null,
         };
      },
      shift_load(element, time=0){
         setTimeout(
            ()=>{
               this.loading[element] = !this.loading[element];
            },
            time
         )
      },
   }
}
</script>

<style scoped>
.loader{
   font-size: 50px;
}
</style>
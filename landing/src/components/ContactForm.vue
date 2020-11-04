<template>
   <div class="row" v-if="loading.form" >
      <div class="col-12">
         <i class="fas fa-sync"></i>
      </div>
   </div>
   <!-- Contact form -->
   <div id="contact" class="contact-form">
      <div class="container">
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
                  <input
                     type="submit"
                     class="btn btn-secondary btn-block"
                     value="Send"
                     @click="enviar_formulario"
                  />
               </div>
            </div>
         </form>
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
         }
      }
   },
   methods:{
      enviar_formulario(){
         window.axios.get(`${Data.apiurl}email`).then(res => {
            console.table(res)
            if(res.email){
               toastr.success("se envio el email")
            }else{
               toastr.error("no se envio el email pero se guardo la informacion")
            }
            toastr.success("se guardo con exito")
         }).catch(err => {
            toastr.error("error de comunicacion con el api, no se enviaron tus datos")
            console.debug(err)
         })
      },
   }
}
</script>
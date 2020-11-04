<template>
  <div class="about row">
    <h1>Log de Emails</h1>
    <div class="col-12">
      <table class="table">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Asunto</th>
            <th>Enviado</th>
            <th>Fecha</th>
          </tr>
        </thead>
        <tbody>
          <tr :key="index" v-for="(email, index) in emails" >
            <td scope="row">{{ email.nombre }}</td>
            <td>{{ email.telefono }}</td>
            <td>{{ email.email }}</td>
            <td>{{ email.asunto }}</td>
            <td>
              <i v-if="email.email_enviado" class="fas fa-check text-success" aria-hidden="true"></i>
              <i v-else class="fa fa-times text-danger" aria-hidden="true"></i>
            </td>
            <td>{{ fecha_humana(email.created_at) }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import Data from '../constants.js';
export default {
  name: 'About',
  components: {
  },
  mounted () {
    //var vm  = this;
    window.axios.get(`${Data.apiurl}email`).then(res => {
      console.log(res)
      this.emails = res.data
    }).catch(err => {
      console.debug(err)
    })
  },
  data() {
    return {
      emails:[],
    }
  },
  methods: {
    fecha_humana(fecha){
      let new_fecha = window.moment(fecha);
      return new_fecha.format('LLL')
    }
  }
}
</script>

<style scoped>
  * {
    text-align: center;
  }
</style>

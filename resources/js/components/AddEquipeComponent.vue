<template>
    <div>


<!-- Button trigger modal -->
<button type="button" class="mt-5 creation" data-toggle="modal" data-target="#exampleModal" style="margin:auto; display:flex;">
    <p class="text-button">Créer une équipe</p>
</button>

<!-- Modal -->
<div class="modal fade formpoz" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content formcreation">
      <div class="modal-header">
        <h5 class="modal-title titleform" id="exampleModalLabel">Bienvenu dans la création d'équipe</h5>
        <buttontype class="buttonclose" data-dismiss="modal" aria-label="Close">
          <span class="textclose" aria-hidden="true">&times;</span>
        </buttontype>
      </div>
      <div class="modal-body">


          <form>
              <div class="generalform">
                <div class="form-group">
                    <textarea name="name" id="name" class="form-control formcontent" v-model="name" placeholder="Nom de l'équipe"></textarea>
                    <textarea name="nombrej" id="nombrej"class="form-control formcontent" v-model="nombre_de_joueurs" placeholder="Nationalite de l'équipe"></textarea>
                </div>

                <div class="logo">
                    <p class="logotext">Logo</p>
                </div>
              </div>

          </form>


      </div>
      <div class="modal-footer">
        <button type="submit" class="validation" @click='equipeStore' data-dismiss="modal">Ajouter l'équipe</button>
      </div>
    </div>
  </div>
</div>


    </div>
</template>

<script>
export default {

    data() {
        return {
        name: '',
        nombre_de_joueurs: ''
        }
    },

    methods: {
        equipeStore(){
            axios.post('http://127.0.0.1:8000/api/equipesList', {
                name: this.name,
                nombre_de_joueurs : this.nombre_de_joueurs
            })
            .then(response => this.$emit('equipe-added', response))
            .catch(error => console.log('Saisi Incorrect'));
        }
    }
}
</script>

<style scopped>
    .creation {
       background: none;
       color: white;
       border: 1px solid #FF7A00;
       width: 350px;
       height: 84px;
       font-size: 24px;
       border-radius: 20px;
       margin-bottom: 10%;
    }
    .text-button {
        margin-left: 22.5%;
        margin-top: 6%;
    }

    .formpoz{
        margin-left: -20%;
        margin-top: 10%;
    }

    .generalform{
        display: flex;
        flex-direction: row;
    }

    .formcreation{
        background: black;
        color: white;
        width: 917px;
        height: 576px;
    }

    .titleform{
        color: #FF7A00;
        font-size: 24px;
        margin-left: 25%;
    }
    .buttonclose{
        width: 30px;
        height: 30px;
        color: #FF7A00;
        font-size: 24px;
    }
    .formcontent{
        width: 350px;
        height: 40px;
        resize: none;
        background: none;
        border: 1px solid #FF7A00;
        margin-top: 23.5%;
        margin-left: 5%;
    }
    .formcontent::placeholder{
        color: white;
        font-size: 24px;
        text-align: center;
    }

    .logo{
        width: 255px;
        height: 255px;
        margin-left:25%;
        margin-top: 5%;
        border: 1px solid #FF7A00;
        border-radius: 100%;
        text-align: center;
    }
    .logotext{
        font-size: 48px;
        margin-top: 35%;
    }
    .validation{
        width: 350px;
        height: 40px;
        background: none;
        color: white;
        border: 1px solid #FF7A00;
        margin-right: 25%;
    }
</style>

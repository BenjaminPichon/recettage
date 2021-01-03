<template>

<div>

    <div class="modal fade formpoz" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content formcreation">
      <div class="modal-header">
        <h5 class="modal-title titleform" id="editModalLabel">Editer l'équipe</h5>
        <buttontype class="buttonclose" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="textclose">&times;</span>
        </buttontype>
      </div>
      <div class="modal-body">


          <form>
                <div class="form-group">
                    <textarea name="name" id="name" rows="1" class="form-control formcontent" v-model="equipeToEdit.name" placeholder="Nom de l'équipe"></textarea>
                    <textarea name="nombrej" id="nombrej" rows="1" class="form-control formcontent" v-model="equipeToEdit.nombre_de_joueurs" placeholder="Nationalité de l'équipe"></textarea>
                </div>
          </form>


      </div>
      <div class="modal-footer">
        <button type="submit" class="validation" data-dismiss="modal" @click="update">Enregistrer</button>
      </div>
    </div>
  </div>
</div>

</div>


</template>

<script>
export default {
    props: ['equipeToEdit'],

    methods: {
        update(){
            axios.patch('http://127.0.0.1:8000/api/equipes/edit/' + this.equipeToEdit.id, {
                name: this.equipeToEdit.name,
                nombre_de_joueurs: this.equipeToEdit.nombre_de_joueurs
            })
            .then(response => this.$emit('equipe-updated', response))
            .catch(error => console.log(error));
        }
    }
}
</script>

<style scopped>
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
        width: 900px;
        height: 500px;
    }

    .titleform{
        color: #FF7A00;
        font-size: 24px;
        margin-left: 45%;
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
        margin: 5%;
        margin-left: 35%;
    }
    .formcontent::placeholder{
        color: white;
        font-size: 24px;
        text-align: center;
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

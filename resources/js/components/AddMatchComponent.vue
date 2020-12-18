<template>
    <div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
  Ajouter un match
</button>

<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

          <div class="form-group">
    <label for="id_equipeA">Equipe A</label>
    <select class="form-control" id="id_equipeA" name="id_equipeA" v-model="id_equipeA">
        <option value="" disabled selected>Sélectionner une équipe...</option>
      <option v-for="(equipe, index) in equipes" :key="index"
      :id="equipe.id" :value="equipe.id">{{ equipe.name }}</option>
    </select>
  </div>

    <div class="form-group">
    <label for="id_equipeB">Equipe B</label>
    <select class="form-control" id="id_equipeB" name="id_equipeB" v-model="id_equipeB">
    <option value="" disabled selected>Sélectionner une équipe...</option>
      <option v-for="(equipe, index) in equipes" :key="index"
      :id="equipe.id" :value="equipe.id">{{ equipe.name }}</option>
    </select>
  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" :disabled="checkEquipeId" class="btn btn-success" data-dismiss="modal" @click="matchStore">Ajouter un match</button>
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
        id_equipeA: '',
        id_equipeB: '',
        equipes: []
        }
    },
    computed: {
        checkEquipeId: function(){
            return this.id_equipeA === this.id_equipeB
        }
    },
    methods: {
        matchStore() {
            axios.post('http://127.0.0.1:8000/api/matchesList', {
                id_equipeA: this.id_equipeA,
                id_equipeB : this.id_equipeB
            })
            .then(response => this.$emit('match-added', response))
            .catch(error => console.log('Saisi Incorrect'));
        },
        getEquipes(){
            axios.get('http://127.0.0.1:8000/api/equipesList')
                .then(response => this.equipes = response.data.data)
                .catch(error => console.log(error));
        }
    },
    mounted() {
        this.getEquipes()
    }
}


</script>
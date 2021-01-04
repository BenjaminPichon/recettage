<template>
    <div>
        <!-- Button trigger modal -->
        <button
            type="button"
            class="mt-5 creation"
            data-toggle="modal"
            data-target="#addModal"
            style="display:flex;margin:auto;"
        >
            <p class="text-button">Créer un match</p>
        </button>

        <!-- Modal -->
        <div
            class="modal fade formpoz"
            id="addModal"
            tabindex="-1"
            aria-labelledby="addModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content formcreation">
                    <div class="modal-header">
                        <h5
                            class="modal-title titleform"
                            id="exampleModalLabel"
                        >
                            Bienvenue dans la création d’un match
                        </h5>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div
                        class="modal-body d-flex justify-content-center align-items-center"
                    >
                        <div class="form-group">
                            <select
                                class="form-control borderbox"
                                id="id_equipeA"
                                name="id_equipeA"
                                v-model="id_equipeA"
                            >
                                <option value="" disabled selected
                                    >Choisir une équipe</option
                                >
                                <option
                                    v-for="(equipe, index) in equipes"
                                    :key="index"
                                    :id="equipe.id"
                                    :value="equipe.id"
                                    >{{ equipe.name }}</option
                                >
                            </select>
                        </div>
                        <p style="font-size:30px">VS</p>

                        <div class="form-group">
                            <select
                                class="form-control borderbox borderbox2 "
                                id="id_equipeB"
                                name="id_equipeB"
                                v-model="id_equipeB"
                            >
                                <option value="" disabled selected
                                    >Choisir une équipe</option
                                >
                                <option
                                    v-for="(equipe, index) in equipes"
                                    :key="index"
                                    :id="equipe.id"
                                    :value="equipe.id"
                                    >{{ equipe.name }}</option
                                >
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="submit"
                            :disabled="checkEquipeId"
                            class="validation"
                            data-dismiss="modal"
                            @click="matchStore"
                        >
                            Ajouter un match
                        </button>
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
            id_equipeA: "",
            id_equipeB: "",
            equipes: []
        };
    },
    computed: {
        checkEquipeId: function() {
            return this.id_equipeA === this.id_equipeB;
        }
    },
    methods: {
        matchStore() {
            axios
                .post("http://127.0.0.1:8000/api/matchesList", {
                    id_equipeA: this.id_equipeA,
                    id_equipeB: this.id_equipeB
                })
                .then(response => this.$emit("match-added", response))
                .catch(error => console.log("Saisi Incorrect"));
        },
        getEquipes() {
            axios
                .get("http://127.0.0.1:8000/api/equipesList")
                .then(response => (this.equipes = response.data.data))
                .catch(error => console.log(error));
        }
    },
    mounted() {
        this.getEquipes();
    }
};
</script>

<style scopped>
.modal-footer {
    border-top: 0;
}
.creation {
    background: none;
    color: white;
    border: 1px solid #ff7a00;
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
.formpoz {
    margin-left: -20%;
    margin-top: 10%;
}
.formcreation {
    background: black;
    color: white;
    width: 917px;
    height: 576px;
}
.borderbox {
    background-color: black;
    border: 3px solid #ff7a00;
    border-radius: 0;
    color: white;
}
.borderbox2 {
    border: 3px solid #00c2a0;
}
</style>

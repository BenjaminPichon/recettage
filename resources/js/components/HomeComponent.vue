<template>
    <div class="container">
        <p class="text-center mt-5">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor
            accumsan arcu in urna, tempus tristique. Egestas sed neque a sed
            nulla in. Accumsan, hendrerit leo, a tristique at eleifend. A, dui
            nibh et nisl. Enim arcu nisl convallis arcu volutpat, elementum et
            nisi, est. Urna, venenatis, aliquam viverra cras tempus, nisi vel
            auctor velit. Nisi, molestie nec est a. Donec neque id quis eget
            purus natoque amet iaculis sapien. Risus nunc, molestie maecenas
            aliquam sed quam. Proin libero nibh dictumst cras. Non malesuada sed
            odio porttitor. Diam neque nascetur tempor suspendisse nibh massa
            leo.
        </p>
        <div class="d-flex justify-content-around">
            <div class="box mt-5 p-3 border-radius1">
                <h2>Créer une équipe</h2>
                <p class="paragraphe">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et
                    diam dolor diam nunc. Egestas varius convallis diam vitae
                    morbi nibh. Consequat accumsan aliquam sed mattis nulla.
                    Purus nisl libero, sit scelerisque. Urna, risus, aliquet
                    rhoncus at donec. Eget purus amet sit facilisis. Maecenas eu
                    cursus commodo diam vel, mi quam. Gravida at nunc sed risus
                    eget vitae, id. Lobortis rhoncus aenean.
                </p>
                <router-link to="/equipes" class="box px-5 py-3 border-radius3"
                    >Créer une équipe</router-link
                >
            </div>
            <div class="box mt-5 p-3 border-radius2">
                <h2>Créer un match</h2>
                <p class="paragraphe">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et
                    diam dolor diam nunc. Egestas varius convallis diam vitae
                    morbi nibh. Consequat accumsan aliquam sed mattis nulla.
                    Purus nisl libero, sit scelerisque. Urna, risus, aliquet
                    rhoncus at donec. Eget purus amet sit facilisis. Maecenas eu
                    cursus commodo diam vel, mi quam. Gravida at nunc sed risus
                    eget vitae, id. Lobortis rhoncus aenean.
                </p>
                <router-link to="/matches" class="box px-5 py-3 border-radius4"
                    >Créer un match</router-link
                >
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    }
};
</script>
<style scoped>
.box {
    border: 3px solid #ff7a00;
    display: flex;
    flex-direction: column;
    align-items: center;
    color: #ffff;
}

.text-center {
    color: #ff7a00;
}
.border-radius1 {
    border-radius: 20px 0 0 20px;
}

.border-radius2 {
    border-radius: 0 20px 20px 0;
}

.border-radius3 {
    border-radius: 10px 0 0 10px;
    padding: 10px;
}

.border-radius4 {
    border-radius: 0 10px 10px 0;
}

.paragraphe {
    max-width: 400px;
}
</style>

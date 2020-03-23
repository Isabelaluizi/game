<template>
<div class="container">
    <div class="row">
    <div class="col-sm">
        <h3 class="text" @click="sendRock">Rock</h3>
   </div>
   <div class="col-sm">
   <h3 class="text" @click="sendPaper">Paper</h3>
   </div>
   <div class="col-sm">
   <h3 class="text" @click="sendScissors">Scissors</h3>
   </div>
   </div>
</div>
</template>

<script>
export default {
    name: 'Button',
    methods: {
        sendRock: function() {
            this.$root.$emit('userChoiceRock',"Rock")
        },
        sendPaper: function() {
            this.$root.$emit('userChoicePaper',"Paper")
        },
        sendScissors: function(){
            this.$root.$emit('userChoiceScissors',"Scissors")
        }
    }
}
</script>

<style scoped>
.text {
    text-align: center;
}
</style>

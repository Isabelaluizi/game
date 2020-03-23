<template>
<div class="container">
    <div class="row">
    <div class="col-sm">
        <h3 class="center btn btn-outline-danger btn-lg my-style btn-block"  @click="sendRock">Rock</h3>
   </div>
   <div class="col-sm">
   <h3 class="center btn btn-outline-danger btn-lg my-style btn-block" @click="sendPaper">Paper</h3>
   </div>
   <div class="col-sm">
   <h3 class="center btn btn-outline-danger btn-lg my-style btn-block" @click="sendScissors">Scissors</h3>
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


</style>

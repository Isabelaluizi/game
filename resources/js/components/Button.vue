<template>
<div>
   <h3 @click="sendRock">Rock</h3>
   <h3 @click="sendPaper">Paper</h3>
   <h3 @click="sendScissors">Scissors</h3>
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

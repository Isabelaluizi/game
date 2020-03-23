<template>
    <div>
    <h4 class="text">{{ userChoice }}</h4>
    </div>
</template>

<script>
export default {
    name: 'User',
    data: function() {
        return {
            userChoice: "Waiting..."
        }
    },
    mounted: function() {
        this.$root.$on('userChoiceRock', this.showRock);
        this.$root.$on('userChoicePaper', this.showPaper);
        this.$root.$on('userChoiceScissors', this.showScissors);

    },
    methods: {
        showRock(Rock) {
               this.userChoice = Rock;
               this.$root.$emit('cpuPlays')
        },
        showPaper(Paper) {
            this.userChoice = Paper;
            this.$root.$emit('cpuPlays')
        },
        showScissors(Scissors) {
            this.userChoice = Scissors
            this.$root.$emit('cpuPlays')
        }
    }
}

</script>

<style scoped>
.text {
    text-align:center;
}
</style>

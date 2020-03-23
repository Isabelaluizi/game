<template>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text"> Cpu</h3>
                <h4 class="text"> {{ cpuScore }}</h4>
            </div>
             <div class="col">
                <h3 class="text">Player</h3>
                <h4 class="text"> {{ userScore }}</h4>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Scorekeeper',
    data() {
        return {
            cpuSelectedChoice: "waiting",
            userSelectedChoice: "waiting"
        }
    },
    mounted: function() {
        this.$root.$on('userChoiceRock', this.userplaying);
        this.$root.$on('userChoicePaper', this.userplaying);
        this.$root.$on('userChoiceScissors', this.userplaying);
        this.$root.$on('cpuChoice',this.cpuplaying);
        this.$root.$on('checkWinner',this.incrWinner)

    },
    data: function() {
        return {
            cpuScore: 0 ,
            userScore: 0
        }
    },
    methods: {
        userplaying(userChoice) {
            //console.log(userChoice)
            this.userSelectedChoice=userChoice;
            },
        cpuplaying(cpuChoice) {
            //console.log(cpuChoice)
            this.cpuSelectedChoice=cpuChoice;
            this.$root.$emit('checkWinner')
        },
        incrWinner() {
            if(this.userSelectedChoice=="Paper") {
                if(this.cpuSelectedChoice == "Scissors") {
                    this.cpuScore++;
                }else if(this.cpuSelectedChoice =="Rock") {
                    this.userScore++;
                }
            } else if(this.userSelectedChoice=="Scissors") {
                if(this.cpuSelectedChoice == "Paper") {
                    this.userScore++;
                }else if(this.cpuSelectedChoice =="Rock") {
                    this.cpuScore++;
                }
            } else if(this.userSelectedChoice=="Rock") {
                if(this.cpuSelectedChoice == "Scissors") {
                    this.userScore++;
                } else if(this.cpuSelectedChoice =="Paper") {
                    this.cpuScore++;
                }

            }
        }

        }
}



</script>

<style scoped>
.text {
    text-align:center;
}
</style>

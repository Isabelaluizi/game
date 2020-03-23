<template>
    <div>
    <h4 class="text">{{ cpuChoice }}</h4>
    </div>
</template>

<script>
export default {
    name: 'Cpu',
    mounted: function() {
        this.$root.$on('cpuPlays', this.getNewChoice)
    },
    data: function() {
        return {
            cpuChoice: "Waiting user.."
        }
    },
    methods: {
        getNewChoice() {
                axios.get('/cpu-response')
                .then(response => {
                    //console.log(response);
                    this.cpuChoice = response.data.cpuRandomChoice;
                    this.$root.$emit('cpuChoice',this.cpuChoice)
                })
                .catch(error => {
                    //console.log(error);
                    this.cpuChoice = 'Error getting that sweet sweet Kanye Quote';
                });
            }
        }
}



</script>

<style scoped>
.text {
    text-align:center;
}

</style>

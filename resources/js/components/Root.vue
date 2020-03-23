<template>
<div id="box" class="container">
    <h6 v-if="this.ind=='1'" class="text-center">{{ messageUser }}</h6>
    <h6 v-else class="text-center">{{ messageCpu }}</h6>
    <div class="row">
        <Scorekeeper />
    </div>
    <div class="row">
        <div class="col">
            <User />
        </div>
        <div class="col">
           <Cpu />
        </div>
    </div>
    <div class="row">
        <Button />
    </div>
</div>

</template>

<script>
import Cpu from './Cpu.vue'
import Button from './Button.vue'
import User from './User.vue'
import Scorekeeper from './Scorekeeper.vue'

    export default {
        name: 'Root',
        components: {
            Button,
            Cpu,
            User,
            Scorekeeper
        },
        data() {
            return {
                messageUser: "Let´s start",
                messageCpu:"",
                ind:"1"
            }
        },
        mounted: function() {
        this.$root.$on('showMessageUser', this.sendUserMessage);
        this.$root.$on('showMessageCpu',this.sendCpuMessage);
    },
    methods: {
        sendUserMessage() {
            this.ind="1";
            this.messageUser = "Congratulations!!!";
        },
        sendCpuMessage() {
            this.ind="0";
            this.messageCpu = "Oh boy! :("
        }
    }
    }
</script>

<style>

div {
    background-color:#f6f6f6;
}
#box {
    padding-top:2vh;
}

</style>

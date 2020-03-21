<template>
<div>
    <Cpu />
    <User />
    <Button />
    <Scorekeeper />
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
        }
    }
</script>

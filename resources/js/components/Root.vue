<template>
<div class="container">
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
        }
    }
</script>

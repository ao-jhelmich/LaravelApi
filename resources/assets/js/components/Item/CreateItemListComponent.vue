<template>
    <!-- <div class='row'>
        <h1>All items</h1>
        <h4>New item</h4>
        <h4>All Items</h4>
        <ul class="list-group">
            <li v-if='list.length === 0'>There are no items yet!</li>
            <li class="list-group-item" v-for="(item, index) in list">
                 {{ item.name }}
                 <button @click="deleteItem(item.id)" class="btn btn-danger btn-xs pull-right">Delete</button>
            </li>
        </ul>
    </div> -->
    <div class="box">
        <div class="box-header text-center">
            <h3 class="box-title">your items</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table">
                <tbody>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Item Name</th>
                    <th></th>
                    <th style="width: 100px">
                        <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#create-modal">Add</button>
                    </th>
                </tr>
                <tr id="list" v-for="item in items">
                    <td>{{ item.id }}</td>
                    <td>{{ item.name}}</td>
                    <td>
                        <button type="button" class="btn btn-block btn-warning">edit</button>
                    </td>
                    <td>
                        <button @click="deleteItem(item.id)" class="btn btn-block btn-danger">delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        
    </div>
</template>
<script>
    export default {
        data() {
            return {
                el: '#list',
                data:{
                    list: [],
                }
            };
        },
        
        created() {
            this.fetchItems();
        },
        
        methods: {
            fetchItems() {
                axios.get('api/item').then((res) => {
                    this.list = res.data;
                });
            },
 
            createItem() {
                axios.post('api/item', this.item)
                    .then((res) => {
                        this.item.name = '';
                        this.edit = false;
                        this.fetchItems();
                    })
                    .catch((err) => console.error(err));
            },
 
            deleteItem(id) {
                axios.delete('api/item/' + id)
                    .then((res) => {
                        this.fetchItems()
                    })
                    .catch((err) => console.error(err));
            },
        }
    }
</script>
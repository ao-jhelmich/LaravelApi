<template>
    <!-- <div class='row'>
        <h1>All items</h1>
        <h4>New item</h4>
        <form action="#" @submit.prevent="createItem()">
            <div class="input-group">
                <input v-model="item.name" type="text" name="body" class="form-control" autofocus>
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary">New Item</button>
                </span>
            </div>
        </form>
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
                        <a href="/itemlist"><button type="button" class="btn btn-block btn-success">Add</button></a>                                                
                    </th>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Rope</td>
                    <td>
                        <button type="button" class="btn btn-block btn-warning">edit</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-block btn-danger">delete</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

   <!-- <div class="modal fade in" id="modal-default" style="display: block;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                <p>One fine body…</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
    </div> -->
</template>







<script>
    export default {
        data() {
            return {
                list: [],
                item: {
                    id: '',
                    name: ''
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
<template>
  <div class="modal fade in" id="create-modal" style="display: block;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                 <form action="#" @submit.prevent="createItem()">
                    <div class="input-group">
                        <input v-model="item.name" type="text" name="body" class="form-control" autofocus>
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary">New Item</button>
                        </span>
                    </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
    </div>
</template>
<script>
export default {
  
}
</script>


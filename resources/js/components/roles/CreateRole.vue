<template>
    <form>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="name">Role Name:</label>
                    <input type="text" class="form-control"
                           v-model="name" id="name"
                           placeholder="Enter role name">
                    <HasError :form="form" field="name"/>
                </div>
                <div class="form-group col-md-12">
                    <label for="name">Assign Permissions:</label>
                    <div class="row row-cols-1 row-cols-md-3">
                        <div class="col" v-for="permissions in permission">
                            <div class="icheck-turquoise">
                                <input type="checkbox"
                                       name="permissions[]"
                                       value="{{$permission->id}}"
                                       id="permission-{{$permission->id}}">
                                <label for="permission-{{$permission->id}}">
                                    {{ $permission->name }}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary bg-gradient-primary">
                <i class="fa fa-paper-plane"></i>
                save
            </button>
        </div>
    </form>
</template>

<script>
export default {
    name: "CreateRole",

    data() {
        return {
            permissions: [],
            form: new Form({
                'name': '',
                'permission': []
            })
        }
    },

    methods: {
        getPermissions() {
            axios.get("http://127.0.0.1:8000/backend/get-all-permissions")
                .then(response => {
                    this.permissions = response.data.permissions
                })
        }
    },
    created() {
        this.getPermissions();
    }
}
</script>

<style scoped>

</style>

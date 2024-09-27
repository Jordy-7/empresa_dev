document.addEventListener('alpine:init', () => {
    Alpine.data('dashboard', () => ({
        showModal: false,
        modalAction: '',
        editUser: {},
        
        openCreateModal() {
            this.showModal = true;
            this.modalAction = 'create';
            this.editUser = {};
        },
        
        openEditModal(user) {
            this.showModal = true;
            this.modalAction = 'update';
            this.editUser = { ...user };
        },
        
        closeModal() {
            this.showModal = false;
        },
        
        submitForm() {
            document.querySelector('form').submit();
        },
        
        deleteUser(id) {
            if (confirm('¿Estás seguro de que quieres eliminar este usuario?')) {
                document.getElementById(`delete-form-${id}`).submit();
            }
        }
    }));
});

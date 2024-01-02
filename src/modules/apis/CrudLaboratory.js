

const {Post} = wp.api.models

class CrudLaboratory {
    constructor(){

        console.log('Constructing new instance')
        // Create a new post
var post = new wp.api.models.Post( { title: 'CRUD: This is a test post' } );
post.save();
        
    }

    index(){}
    store(data = {}){
       Post(data);
       Post.save()
    }
    show(){}
    edit(){}
    updated(){}
    destroy(){}
}

export default CrudLaboratory;
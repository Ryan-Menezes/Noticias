$(document).ready(function(){
	$('.btn-delete').click(function(){
		let route = $(this).data('route')
		
		if(route != undefined){
			$('.modal-form-delete').attr('action', route)
		}
	})

	// Configurações do form validade
    $('.form-validate').validate({
        errorElement: 'span',
        messages: {
            required: 'Este campo é obrigatório',
            email: 'Por favor entre com um email válido'
        }
    })

    // Configurações do textarea
    $('*').delegate('.textarea-editor-btn[data-type]', 'click', function(){
    	let data = $(this).data()
    	let element = $(this).parent().siblings('textarea')
    	let types = {
    		bold: 		'<span class="bold">Texto Aqui</span>',
    		italic: 	'<span class="italic">Texto Aqui</span>',
    		underline: 	'<span class="underline">Texto Aqui</span>',
    		link: 		'<a href="Link de Redirecionamento" target="_blank" title="Titulo do Link">Texto Aqui</a>'
    	}

    	if(types[data.type] !== undefined){
    		element.val(element.val() + types[data.type])
    	}

    	return false
    })

    // Configurações da imagem
    $('*').delegate('.image-upload', 'change', function(){
        let input = $(this)
        let file = input.prop('files')[0]
        let content = $(`label[for=${input.attr('id')}] img[data-default]`)
        let data = content.data()
        let reader = new FileReader()

        reader.onloadend = function(){
            content.attr('src', this.result)
        }

        if(file){
            reader.readAsDataURL(file)
        }else{
            content.attr('src', data.default)
        }

        return false
    })

    // Configurações de remoção de um elemento
    $('*').delegate('.btn-remove-element', 'click', function(){
        if(confirm('Deseja realmente remover este elemento?')){
            let data = $(this).data()
            let input = $('input[type="hidden"][name="images-notice-remove"]')

            $(this).parents('.content-group').remove()

            if(data.remove.length > 0){
                if(input.val().length == 0){
                    input.val(data.remove)
                }else{
                    input.val(`${input.val()},${data.remove}`)
                }
            } 
        }

        return false
    })

    // Configurações para requisição ajax
    $('*').delegate('[data-urlajax]', 'click', function(){
        let data = $(this).data()

        $.ajax({
            method: 'POST',
            url: data.urlajax,
            data: data
        })
        .done(function(result){
            $('.content-notice').append(result)
        })
        .fail(function(){
            alert('FALHA DE REQUISIÇÃO!')
        })

        return false
    })

    // Configurações do draggable e droppable
    $('*').delegate('.content-notice .draggable', 'mouseenter', function(){
        $(this).draggable({
            axis: 'y',
            revert: true,
            containment: '.content-notice',
            start: function(){
                $(this).css('z-index', '999')
            },
            stop: function(){
                $(this).css('z-index', '1')
            }
        })

        $(this).droppable({
            hoverClass: 'hover',
            accept: '.content-notice .draggable',
            drop: function(event, ui){
                let ele1 = $(this).html()
                let ele2 = $(ui.draggable[0]).html()

                $(this).html(ele2)
                $(ui.draggable[0]).html(ele1)
            }
        })

        return false
    })
})
$(document).ready(function () {

    url = window.location.pathname;

    function currentUrl() {
        x = [url.match(/^(.*?)\/registro-tecs/),
            url.match(/^(.*?)\/Registro-tecs/),
            url.match(/^(.*?)\/registroTecs/),
            url.match(/^(.*?)\/RegistroTecs/)];

        x.forEach(function(element){
            if (element != null) {
                retorno = element['1'];
            }
        });

        return retorno;
    }

    var linguagens_suportadas = [
        {text: 'SQL',           value: 'sql'},
        {text: 'HTML/XML',      value: 'markup'},
        {text: 'PHP',           value: 'php'},
        {text: 'Javascript',    value: 'javascript'},
        {text: 'Java',          value: 'java'},
        {text: 'JSON',          value: 'json'},
        {text: 'Bash',          value: 'bash'},
        {text: 'Powershell',    value: 'powershell'},
    ];

    var estilos_formatacao = [
        { title: 'Headers', items: [
            { title: 'h1',      block: 'h1' },
            { title: 'h2',      block: 'h2' },
            { title: 'h3',      block: 'h3' },
            { title: 'h4',      block: 'h4' }
        ] },
        { title: 'Blocks',  items: [
            { title: 'p',       block: 'p' },
            { title: 'div',     block: 'div' },
            { title: 'pre',     block: 'pre' }
        ] }
    ];

    var image_picker = function(cb, value, meta) {
        if (meta.filetype == 'image') {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');

            input.onchange = function() {
                var file = this.files[0];

                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {
                    var id = 'imagem' + (new Date()).getTime();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    var blobInfo = blobCache.create(id, file, reader.result);
                    blobCache.add(blobInfo);

                    cb(blobInfo.blobUri(), { title: file.name });
                };
            };
            input.click();
        };
    };

    var image_uploader = function (blobInfo, success, failure, progress) {
        var xhr, formData;
        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;

    
        xhr.open('POST', currentUrl() + '/file-uploads/upload');

        xhr.upload.onprogress = function(e) {
            progress(e.loaded / e.total * 100);
        };

        xhr.onerror = function() {
            failure("Erro de transporte do XHR. Código: " + xhr.status);
        };

          alert(xhr.responseText);
        
        xhr.onload = function() {
            var json;


            json = JSON.parse(xhr.responseText);
            if (xhr.status != 200) {
                removerImagens();
                if (json.erro == 'tipo') {
                    failure("Tipo de arquivo inválido, tipos aceitos "
                        + "= png, gif, jpg e bmp.");
                    return;
                }
                if (json.erro == 'tamanho') {
                    failure('Arquivo muito grande, tamanho máximo ' + 
                        '= 2MB.');
                    return;
                }
                if (json.erro == 'pasta') {
                    failure('Erro ao criar pasta no servidor.');
                    return;
                }
                if (json.erro == 'upload') {
                    failure('Erro ao fazer upload do arquivo, ' + 
                        'entre em contato com o suporte.');
                    return;
                }
                failure('Erro HTTP: ' + xhr.status);
                return;
            }
            if (!json || typeof json.location != 'string') {
                failure('JSON inválido: ' + xhr.responseText);
                return;
            }
            success(currentUrl() + '/uploaded-images/' + json.location);
        };
        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());
        xhr.send(formData);
    };

    // busca o editor ativo e remove as imagens dele
    function removerImagens() {
        var id = tinyMCE.EditorManager.activeEditor.id;
        var conteudo = tinyMCE.get(id);
        var $html = $('<div />',{html:conteudo.getContent()});
        $html.find('img[src^="data:"]').remove();
        conteudo.setContent($html.html());
    }


    if (url.match(/^(.*?)\/registro-tecs/) != null ||
        url.match(/^(.*?)\/Registro-tecs/) != null||
        url.match(/^(.*?)\/registroTecs/) != null||
        url.match(/^(.*?)\/RegistroTecs/) != null) {

        tinyMCE.init({ // caixa do chamado
            // General options
            mode: "textarea",
            plugins: "image code lists table link autolink imagetools" +
                " codesample textcolor colorpicker paste",
            toolbar: "bold italic underline | bullist numlist | table | " +
                " codesample | link | image ",
            table_default_styles: {
                border: '1px solid #000',
                "border-collapse": "collapse",
                width: '50%'
            },
            table_default_attributes: {
                border: '1px solid #000'
            },

            codesample_languages: linguagens_suportadas,

            forced_root_blocks: false,
            browser_spellcheck: true,

            menubar: false,
            statusbar: true,

            relative_urls: false,
            remove_script_host: true,
            document_base_url: "http://localhost/",

            language: 'pt_BR',

            media_live_embeds: true,
            media_alt_source: false,
            media_poster: false,
            branding: false,
            //paste_as_text: true, // desabilita colar html
            //image
            automatic_uploads: true,
            images_upload_url: currentUrl() + '/file-uploads/upload',
            file_picker_types: 'image',

            images_upload_base_path: currentUrl() + '/uploaded-images/',

            file_picker_callback: image_picker,

            images_upload_handler: image_uploader,
            paste_data_images: true,

            selector: "#descricao"
        });

        tinyMCE.init({ // caixa do chamado
            // General options
            mode: "textarea",
            plugins: "link autolink paste",
            toolbar: false,

            forced_root_blocks: false,
            browser_spellcheck: true,
            //paste_as_text: true, // desabilita colar html

            menubar: false,
            statusbar: true,

            language: 'pt_BR',
            branding: false,

            selector: "#descricao"
        });

    }

    

    

   

    if (url.match(/^(.*?)\/registro-tecs/) != null ||
        url.match(/^(.*?)\/Registro-tecs/) != null||
        url.match(/^(.*?)\/registroTecs/) != null||
        url.match(/^(.*?)\/RegistroTecs/) != null) {
               
        // interrompe a execução do form e ao passar por return true continua
        $("#RegistroTecForm").submit(function (event) {
            
            //manda as imagens pendentes
            tinymce.activeEditor.uploadImages(function(success) {

                nice = true;
                success.forEach(function(element, index, array) {
                    if (element.status == false) {
                        nice == false;
                    };
                });
                
                if (nice) {
                    return true;
                } else {
                    alert("Erro ao fazer upload da imagem, escolha uma imagem menor do que 2MB");
                }
            });
            //return true;
        });
    }

   
});

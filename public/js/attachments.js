(function () {
  var HOST = window.location.origin + '/posts/upload'
  // var HOST = "http://192.168.1.141:8000/posts/upload"

  addEventListener("trix-attachment-add", function (event) {
    if (event.attachment.file) {
      uploadFileAttachment(event.attachment)
      console.log(event.attachment.file);
    }
  })

  function uploadFileAttachment(attachment) {
    console.log(attachment.file);
    uploadFile(attachment.file, setProgress, setAttributes)

    function setProgress(progress) {
      attachment.setUploadProgress(progress)
    }

    function setAttributes(attributes) {
      attachment.setAttributes(attributes)
    }
  }

  function uploadFile(file, progressCallback, successCallback) {
    var key = createStorageKey(file)
    var formData = createFormData(key, file)
    var xhr = new XMLHttpRequest()

    xhr.open("POST", HOST, true)
    console.log(getMeta('csrf-token'))
    xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));


    xhr.upload.addEventListener("progress", function (event) {
      var progress = event.loaded / event.total * 100
      progressCallback(progress)
    })

    xhr.addEventListener("load", function (event) {
      console.log(xhr)
      var attributes = {
        url: xhr.responseText,
        href: xhr.responseText + "?content-disposition=attachment"
      }
      successCallback(attributes)
    })

    xhr.send(formData)
  }

  function createStorageKey(file) {
    var date = new Date()
    var day = date.toISOString().slice(0, 10)
    var name = date.getTime() + "-" + file.name
    return ["tmp", day, name].join("/")
  }

  function createFormData(key, file) {
    var data = new FormData()
    data.append("key", key)
    data.append("Content-Type", file.type)
    data.append("file", file)
    return data
  }

  function getMeta(metaName) {
    const metas = document.getElementsByTagName('meta');
    console.log(metas)

    for (let i = 0; i < metas.length; i++) {
      if (metas[i].getAttribute('name') === metaName) {
        return metas[i].getAttribute('content');
      }
    }

    return '';
  }
})();

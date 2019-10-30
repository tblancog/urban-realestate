<template>
  <div
    class="uploader"
    @dragenter="OnDragEnter"
    @dragleave="OnDragLeave"
    @dragover.prevent
    @drop="onDrop"
    :class="{ dragging: isDragging }"
  >
    <div class="upload-control" v-show="images.length">
      <label for="file">Seleccionar archivos</label>
      <!-- <button @click="upload">Cargar</button> -->
    </div>

    <div v-show="!images.length">
      <i class="fa fa-cloud-upload"></i>
      <p>Arrastra hasta 5 imágenes (max 700kb)</p>
      <div>o</div>
      <div class="file-input">
        <label for="file">selecciona</label>
        <input type="file" id="file" @change="onInputChange" accept="image/jpg, image/png" />
      </div>
    </div>

    <div class="images-preview" v-if="images.length">
      <div class="img-wrapper" v-for="(image, index) in images" :key="index">
        <span class="remove-img" @click="removeImage(index)">&times;</span>
        <img :src="image.path" :alt="`Image Uploader ${index}`" />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["files", "images"],
  watch: {
    images() {
      if (this.images.length > this.MAX_IMAGES) {
        toast({
          type: "warning",
          title: `Hasta ${this.MAX_IMAGES + 1} imágenes`
        });
        this.cannotAdd = true;
      } else {
        this.cannotAdd = false;
      }
    }
  },
  data: () => ({
    isDragging: false,
    dragCount: 0,
    MAX_SIZE: 700,
    MAX_IMAGES: 8,
    cannotAdd: false
  }),
  methods: {
    OnDragEnter(e) {
      e.preventDefault();

      this.dragCount++;
      this.isDragging = true;
      return;
    },
    OnDragLeave(e) {
      e.preventDefault();
      this.dragCount--;
      if (this.dragCount <= 0) this.isDragging = false;
    },
    onInputChange(e) {
      const files = e.target.files;
      // No more than MAX_IMAGES
      if (this.cannotAdd || files.length > this.MAX_IMAGES) {
        return;
      }
      Array.from(files).forEach(file => this.addImage(file));
    },
    onDrop(e) {
      e.preventDefault();
      e.stopPropagation();
      this.isDragging = false;
      const files = e.dataTransfer.files;
      Array.from(files).forEach(file => this.addImage(file));
    },
    addImage(file) {
      // File checks !!
      // Only image file types
      if (!file.type.match("image.*")) {
        toast({ type: "warning", title: `${file.name} no es una imagen` });
        return;
      }
      // No more than MAX_SIXE kb
      if (file.size > this.MAX_SIZE * 1024) {
        toast({ type: "warning", title: `${file.name} es muy grande` });
        return;
      }
      this.files.push(file);
      const img = new Image(),
        reader = new FileReader();
      reader.onload = e => this.images.push({ path: e.target.result });
      reader.readAsDataURL(file);
    },
    getFileSize(size) {
      const fSExt = ["Bytes", "KB", "MB", "GB"];
      let i = 0;

      while (size > 900) {
        size /= 1024;
        i++;
      }
      return `${Math.round(size * 100) / 100} ${fSExt[i]}`;
    },
    removeImage(idx) {
      // Check if image comes from backend if so then emit and delete
      if (this.images[idx].hasOwnProperty("id")) {
        this.$emit("imageDeleted", this.images[idx]);
      }
      this.files.splice(idx, 1);
      this.images.splice(idx, 1);
    },
    hasMaxImages(files) {
      if (
        files.length > this.MAX_IMAGES ||
        this.files.length > this.MAX_IMAGES
      ) {
        toast({
          type: "warning",
          title: `Hasta ${this.MAX_IMAGES + 1} imágenes`
        });
        return true;
      }
      return false;
    }
  }
};
</script>

<style lang="scss" scoped>
.uploader {
  width: 100%;
  background: #2196f3;
  color: #fff;
  padding: 40px 15px;
  text-align: center;
  border-radius: 10px;
  border: 3px dashed #fff;
  font-size: 20px;
  position: relative;
  &.dragging {
    background: #fff;
    color: #2196f3;
    border: 3px dashed #2196f3;
    .file-input label {
      background: #2196f3;
      color: #fff;
    }
  }
  i {
    font-size: 85px;
  }
  .file-input {
    width: 200px;
    margin: auto;
    height: 68px;
    position: relative;
    label,
    input {
      background: #fff;
      color: #2196f3;
      width: 100%;
      position: absolute;
      left: 0;
      top: 0;
      padding: 10px;
      border-radius: 4px;
      margin-top: 7px;
      cursor: pointer;
    }
    input {
      opacity: 0;
      z-index: -2;
    }
  }
  .images-preview {
    display: flex;
    flex-wrap: wrap;
    margin-top: 20px;
    .img-wrapper {
      position: relative;
      width: 160px;
      display: flex;
      flex-direction: column;
      margin: 10px;
      height: 150px;
      justify-content: space-between;
      background: #fff;
      box-shadow: 5px 5px 20px #3e3737;
      img {
        max-height: 160px;
      }
    }
    .remove-img {
      position: absolute;
      cursor: pointer;
      right: 0;
      padding: 0 5px;
    }
    .details {
      font-size: 12px;
      background: #fff;
      color: #000;
      display: flex;
      flex-direction: column;
      align-items: self-start;
      padding: 3px 6px;
      .name {
        overflow: hidden;
        height: 18px;
      }
    }
  }
  .upload-control {
    position: absolute;
    width: 100%;
    background: #fff;
    top: 0;
    left: 0;
    border-top-left-radius: 7px;
    border-top-right-radius: 7px;
    padding: 10px;
    padding-bottom: 4px;
    text-align: right;
    button,
    label {
      background: #2196f3;
      border: 2px solid #03a9f4;
      border-radius: 3px;
      color: #fff;
      font-size: 15px;
      cursor: pointer;
    }
    label {
      padding: 2px 5px;
      margin-right: 10px;
    }
  }
}
</style>

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage : theme => ({
        'radio-banner' : "url('/storage/images/radio-banner.jpg')",
        'radio1' : "url('/storage/images/radio1.jpg')",
        'radio2' : "url('/storage/images/radio2.jpg')",
     })
    },
  },
  plugins: [],
}

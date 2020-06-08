const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  purge: [],
  theme: {
    extend: {
      fontFamily: {
        sans: ["Inter var", ...defaultTheme.fontFamily.sans]
      },
      colors: {
        "audio-purple": "#9D0B40",
        "audio-purple": {
          "100": "#f788b0",
          "200": "#f35891",
          "300": "#f24081",
          "400": "#f02872",
          "500": "#ee1162",
          "600": "#d70f58",
          "700": "#bf0d4e",
          "800": "#a70c45",
          "900": "#9D0B40"
        }
      }
    }
  },
  variants: {},
  plugins: [require("@tailwindcss/ui")]
};

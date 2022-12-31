const { DateTime } = require("luxon");

module.exports = function(eleventyConfig) {
  eleventyConfig.addPassthroughCopy("./src/assets");
  eleventyConfig.addPassthroughCopy("./src/MeteorStrikerX");
  eleventyConfig.addPassthroughCopy("./src/favicon.ico");
  
  eleventyConfig.addFilter("postDate", (dateObj) => {
    return DateTime.fromJSDate(dateObj).toLocaleString(DateTime.DATE_MED);
  });
  
  return {
    dir: {
      input: "src",
      output: "public"
    }
  }
}
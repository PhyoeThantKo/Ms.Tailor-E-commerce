module.exports = {
     content: [
          '*.php',
          'admin/**/*.php'
     ],
     css: ['style/style.css'],
     defaultExtractor: (content) => content.match(/[\w-/:]+(?<!:)/g) || [],
     output: 'style/min.css',
};
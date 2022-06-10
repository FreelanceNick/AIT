import Purgecss from 'purgecss'
import purgecssWordpress from 'purgecss-with-wordpress'

const purgeCss = new Purgecss({
  content: ['**/*.html'],
  css: ['**/*.css'],
  safelist: purgecssWordpress.safelist
})
const result = purgecss.purge()

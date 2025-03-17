<script setup>
import { ref, onMounted, onUnmounted } from 'vue'
import gsap from 'gsap'

const largeHeader = ref(null)
const canvas = ref(null)

let ctx,
  width,
  height,
  points,
  target,
  animateHeader = true

onMounted(() => {
  initHeader()
  initAnimation()
  addListeners()
})

onUnmounted(() => {
  window.removeEventListener('mousemove', mouseMove)
  window.removeEventListener('scroll', scrollCheck)
  window.removeEventListener('resize', resize)
})

function initHeader() {
  width = window.innerWidth
  height = window.innerHeight
  target = { x: width / 2, y: height / 2 }

  if (largeHeader.value) largeHeader.value.style.height = `${height}px`

  if (canvas.value) {
    canvas.value.width = width
    canvas.value.height = height
    ctx = canvas.value.getContext('2d')
  }

  points = []
  for (let x = 0; x < width; x += width / 20) {
    for (let y = 0; y < height; y += height / 20) {
      let px = x + (Math.random() * width) / 20
      let py = y + (Math.random() * height) / 20
      points.push({ x: px, originX: px, y: py, originY: py })
    }
  }

  // Find closest points
  points.forEach((p1) => {
    p1.closest = points
      .filter((p2) => p1 !== p2)
      .sort((p2a, p2b) => getDistance(p1, p2a) - getDistance(p1, p2b))
      .slice(0, 5)

    p1.circle = new Circle(p1, 2 + Math.random() * 2, 'rgba(255,255,255,0.3)')
  })
}

function addListeners() {
  window.addEventListener('mousemove', mouseMove)
  window.addEventListener('scroll', scrollCheck)
  window.addEventListener('resize', resize)
}

function mouseMove(e) {
  target.x = e.pageX || e.clientX + document.documentElement.scrollLeft
  target.y = e.pageY || e.clientY + document.documentElement.scrollTop
}

function scrollCheck() {
  animateHeader = document.documentElement.scrollTop <= height
}

function resize() {
  width = window.innerWidth
  height = window.innerHeight
  largeHeader.value.style.height = `${height}px`
  canvas.value.width = width
  canvas.value.height = height
}

function initAnimation() {
  animate()
  points.forEach(shiftPoint)
}

function animate() {
  if (animateHeader) {
    ctx.clearRect(0, 0, width, height)

    points.forEach((p) => {
      let distance = getDistance(target, p)
      p.active = distance < 4000 ? 0.3 : distance < 20000 ? 0.1 : distance < 40000 ? 0.02 : 0
      p.circle.active = p.active * 2

      drawLines(p)
      p.circle.draw()
    })
  }
  requestAnimationFrame(animate)
}

function shiftPoint(p) {
  gsap.to(p, {
    duration: 1 + Math.random(),
    x: p.originX - 50 + Math.random() * 100,
    y: p.originY - 50 + Math.random() * 100,
    ease: 'circ.inOut',
    onComplete: () => shiftPoint(p),
  })
}

function drawLines(p) {
  if (!p.active) return
  ctx.strokeStyle = `rgba(156,217,249,${p.active})`
  ctx.beginPath()
  p.closest.forEach((closest) => {
    ctx.moveTo(p.x, p.y)
    ctx.lineTo(closest.x, closest.y)
  })
  ctx.stroke()
}

class Circle {
  constructor(pos, radius, color) {
    this.pos = pos
    this.radius = radius
    this.color = color
  }

  draw() {
    if (!this.active) return
    ctx.beginPath()
    ctx.arc(this.pos.x, this.pos.y, this.radius, 0, 2 * Math.PI)
    ctx.fillStyle = `rgba(156,217,249,${this.active})`
    ctx.fill()
  }
}

function getDistance(p1, p2) {
  return Math.pow(p1.x - p2.x, 2) + Math.pow(p1.y - p2.y, 2)
}
</script>

<template>
  <div ref="largeHeader" class="large-header">
    <canvas ref="canvas"></canvas>
  </div>
</template>

<style scoped>
.large-header {
  position: fixed;
  width: 100%;
  height: auto;
  background: #333;
  overflow: hidden;
  background-size: cover;
  background-position: center;
  z-index: -1;
}

.main-title {
  position: fixed;
  width: 100%;
  top: 50%;
  text-align: center;
  font-size: 40px;
  color: white;
  font-weight: bold;
  transform: translateY(-50%);
}

.thin {
  font-weight: 300;
}
</style>

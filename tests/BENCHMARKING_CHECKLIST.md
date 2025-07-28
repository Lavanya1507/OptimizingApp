# Benchmarking Checklist

This checklist helps you track performance improvements as you add features and optimize your PHP application.

## 1. Baseline (Read-only Todo List)
- [ ] Page load time (ms): ______41.98ms____
- [ ] Memory usage (KB): ____16.38KB______
- [ ] Response time (ms): ____0.92ms______
- [ ] Requests per second (RPS): ____ 486.90 [#/sec] (mean)______
- [ ] Notes: _______________________

## 2. After CRUD Features (Add/Edit/Complete/Delete)
- [ ] Page load time (ms): __________
- [ ] Memory usage (KB): __________
- [ ] Response time (ms): __________
- [ ] Requests per second (RPS): __________
- [ ] Notes: _______________________

## 3. After Each Optimization (Repeat for each major optimization)
### Optimization: _______________________
- [ ] Page load time (ms): __________
- [ ] Memory usage (KB): __________
- [ ] Response time (ms): __________
- [ ] Requests per second (RPS): __________
- [ ] Notes: _______________________

---

## How to Benchmark
- Use browser dev tools for page load time.
- Use `tests/benchmark.php` for memory and response time.
- Use Apache Benchmark (`ab`), k6, or JMeter for RPS.
- Record numbers before and after each major change.

## Tips
- Always benchmark before and after adding features or optimizations.
- Keep this file updated for your final project report/demo. 